<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Attachment;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class HeatpumpOffer extends Mailable
{
    use Queueable, SerializesModels;

    private const NAMES_MAP = [
        "planned-realization-date" => "Planowany termin realizacji",
        "building-state" => "Rodzaj budynku",
        "building-project-type" => "Rodzaj projektu budynku",
        "predefined-project-name" => "Nazwa projektu",
        "individual-project-file" => "Projekt indywidualny", # file with project
        "building-materials" => "Materiały użyte do budowy",
        "material-changes-elaborate" => "Zmiany materiału",
        "build-progress" => "Obecny etap budowy",
        "building-heating-areas" => "Strefy grzewcze budynku",
        "room-expected-temperature" => "Oczekiwana temperatura w pokoju",
        "garage-expected-temperature" => "Oczekiwana temperatura w garażu",
        "building-type" => "Typ budynku",
        "another-building-type-detail" => "Inny typ budynku",
        "construction-year" => "Rok budowy",
        "building-heating-surface" => "Powierzchnia grzewcza budynku",
        "garage-in-building" => "Garaż w bryle budynku?",
        "wall-construction" => "Konstrukcja ściany zewnętrznej",
        "external-wall-width" => "Grubość ściany zewnętrznej",
        "isolation-width" => "Grubość ocieplenia",
        "building-material" => "Materiał użyty do budowy",
        "another-building-material-detail" => "Inny materiał do budowy",
        "isolation-material" => "Materiał ociepleniowy budynku",
        "another-isolation-material-detail" => "Inny materiał ociepleniowy",
        "current-heat-source" => "Obecne źródło ciepła",
        "another-current-heat-source-detail" => "Inne źródło ciepła",
        "building-drawings" => "Rzuty budynku z opisem/projekt",
        "building-drawings-file" => "Plik ze rzutem/projektem budynku", # file with project
        "heating-installation-type" => "Rodzaj instalacji C.O.",
        "went-type" => "Rodzaj wentylacji",
        "heatpump-type" => "Oczekiwany przez typ pompy",
        "heatpump-goal" => "Cel użycia pompy ciepła",
        "people-in-household" => "Ilość osób w gospodarstwie domowym",
        "installation-price" => "Oferta ma zawierać kosztorys?",
        "accept-regulations" => "Regulamin",
    ];


    private Address $senderAddress;
    private string $senderName;
    private string $senderPhoneNr;
    private string $senderCity;


    public function __construct(
        private array $files,
        private array $fields
    ) {
        $this->senderAddress = new Address($fields["email"]);
        $this->senderName = $fields["first-name"] . " " . $fields["last-name"];
        $this->senderPhoneNr = $fields["phone-number"];
        $this->senderCity = $fields["city"];

        $this->makeNamesTranslation();
    }

    public function makeNamesTranslation()
    {
        foreach ($this->fields as $name => $value) {
            if (isset($this::NAMES_MAP[$name]) && $value) {

                if (gettype($value) == "object") {
                    $value = $this->files[$name]->getClientOriginalName();
                }
                $this->fields[$this::NAMES_MAP[$name]] = $value;
            }
            unset($this->fields[$name]);
        }
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [$this->senderAddress],
            subject: 'Heatpump Offer',
            tags: ["offer", "form"]
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.offer-form',
            with: [
                "senderName" => $this->senderName,
                "senderAddress" => $this->senderAddress->address,
                "senderCity" => $this->senderCity,
                "senderPhoneNr" => $this->senderPhoneNr,
                "fields" => $this->fields,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $attachments = [];
        foreach ($this->files as $file) {
            array_push(
                $attachments,
                Attachment::fromPath($file->path())->as($file->getClientOriginalName())
            );
        }

        return $attachments;
    }
}
