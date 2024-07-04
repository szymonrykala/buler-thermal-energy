<?php

// `
// config schema:
// [
    // {
    //     "title": "string",
    //     "button": "string",
    //     "default": false/true,
    //     "params": [
    //         {
    //             "label": "string",
    //             "value": "string"
    //         },
    //         ...
    //     ]
    // },
//     ...
// ]
// `;

$icon = file_get_contents("components/icons/add_circle.svg");

function gen_button(string $label, int $index, string $identifier, bool $default = false)
{
    global $icon;
    $default_class = $default ? "spec__item--default" : "";

    return "<div class='col-12'>
                <div class='spec__item {$default_class}'>
                    <input type='radio' name='spec-view-input-{$identifier}' id='item-{$index}-{$identifier}'>
                    <label role='button' for='item-{$index}-{$identifier}'>{$icon}
                        <span> {$label} </span>
                    </label>
                </div>
            </div>";
}

function gen_single_param(array $param)
{
    $label = $param["label"];
    $value = $param["value"];
    return "
        <div class='col-12 col-sm-6 col-md-4'>
            <div class='spec__param'>
                <h4>{$label}</h4><p>{$value}</p>
            </div>
        </div>
    ";
}


function gen_params(string $title, int $index, int $identifier, array $params_list)
{
    $parameters = implode("",array_map('gen_single_param', $params_list));

    return "
        <div class='d-none d-lg-none col-12 spec__view spec__view-item-{$index}-{$identifier}'>
            <div class='row'>
                <h3 class='col-12 h2 py-4'>{$title}</h3>
            </div>
            <div class='row g-5 ps-5'>
                {$parameters}
            </div>
        </div>
    ";
}


function generate_spec_view(string $json_config, string $identifier_class="0")
{
    $config = json_decode($json_config, true);
    $items = [];
    foreach ($config as $i => $item_config) {
        array_push($items, 
            gen_button(
                label: $item_config["button"],
                index: $i,
                identifier: $identifier_class,
                default: $item_config["default"]
            ) . gen_params(
                title: $item_config["title"],
                index: $i,
                identifier: $identifier_class,
                params_list: $item_config["params"]
            )
        );
    }

    $items_str = implode("", $items);

    echo "<div class='row spec-{$identifier_class}'>
        <div class='col-12 col-lg-4 col-xl-3'>
            <div class='row g-3'>
                {$items_str}
            </div>
        </div>
        <div class='d-none d-lg-block col-lg-8 col-xl-9 ps-5 spec__display'>
            data of the selected item
        </div>
    </div>";
}

