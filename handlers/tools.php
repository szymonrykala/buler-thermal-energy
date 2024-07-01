<?php


class Session
{
    public function __construct(string $name)
    {
        session_name($name);
        session_start();
    }

    static public function from_session_id(string $id)
    {
        session_id($id);
        session_start();
    }

    public function set(string $name, $value)
    {
        $_SESSION[$name] = $value;
    }

    public function get(string $name)
    {
        return $_SESSION[$name];
    }
}


class Response
{
    private array $ALLOWED_ORIGINS = array("macbook-air.home");

    public function __construct(
        private int $code = 500,
        private string $message = "response not set",
    ) {
    }

    public function send()
    {
        header("Access-Control-Allow-Origin: " . join(",", $this->ALLOWED_ORIGINS));
        http_response_code($this->code);
        echo json_encode([
            "message" => $this->message
        ]);
    }
}


class Request
{
    public array $body;
    private string $auth;

    public function __construct()
    {
        $this->body = json_decode(file_get_contents('php://input'), true);
        $this->auth = $this->get_session_id("MAILING_SESSION");
    }

    private function get_session_id()
    {
        return $_COOKIE["MAILING_SESSION"] ?? "no-session-active";
    }

    public function is_authenticated()
    {
        return session_id() === $this->auth;
    }
}
