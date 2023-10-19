<?php

namespace App\View\Components;

use App\View\Components\FormComponent;

class Select extends FormComponent
{
    /**
     * The alert type.
     *
     * @var string
     */
    public $as;
    public $orientation;
    public $attributes;
    public $label;
    public $options;


    /**
     * The function is a constructor for a PHP class that initializes properties and converts an options
     * parameter to an array.
     *
     * @param class The "class" parameter is used to specify the CSS class(es) to be applied to the
     * element. It allows you to style the element using CSS.
     * @param stack The "stack" parameter is used to specify the stack class for the element. It is an
     * optional parameter and can be set to null if not needed.
     * @param as The "as" parameter is used to specify the HTML element that will be used to wrap the
     * generated content. In this case, the default value is 'div', which means that the generated content
     * will be wrapped in a <div> element. However, you can pass a different value to the "
     * @param orientation The "orientation" parameter determines the layout orientation of the element. It
     * can have two possible values: "horizontal" or "vertical".
     * @param label The "label" parameter is used to specify the label for the element. It is an optional
     * parameter, so it can be set to null if no label is needed.
     * @param options The "options" parameter is a variable that can be passed to the constructor of a
     * class. It is used to provide additional configuration or settings for the class. In this case, the
     * "options" parameter is being converted to an array using the "convertToArray" method before being
     * assigned to the "$
     */
    public function __construct($class = null, $stack = null, $as = 'div', $orientation = "horizontal", $label = null, $options = null)
    {
        parent::__construct($class, $stack, $label, $orientation);
        $this->options = $this->convertToArray($options);

    }

    private function processObject($object)
    {

        if ($object) {
            $stackArray = json_decode($object, true);
            if(json_last_error()) {

                $stackArray = json_decode(html_entity_decode($object), true);
            }
            return $stackArray;
        }

    }

    /**
     * The function "convertToArray" takes an input string and converts it into an associative array,
     * handling both JSON-like format and comma-separated strings.
     *
     * @param input The input parameter is a string that represents either a JSON-like format or a
     * comma-separated string.
     *
     * @return an associative array.
     */
    private function convertToArray($input)
    {
        if(!is_null($input)) {
            // Replace non-standard double quotes with standard double quotes
            $input = str_replace(['“', '”'], '"', $input);
            // Remove any trailing commas
            $input = preg_replace('/,\s*}/', '}', $input);
            // Check if the input starts with "{" and ends with "}" to detect JSON-like format
            if (substr($input, 0, 1) === "{" && substr($input, -1) === "}") {
                // Decoding the JSON string into an associative array
                $array = json_decode($input, true);
                if ($array === null) {
                    // If JSON decoding fails, try converting as a regular comma-separated string
                    $input = trim($input, "{}");
                    $input = str_replace("'", "", $input);
                    $values = explode(",", $input);
                    $array = array_combine($values, $values);
                }
            } else {
                // Explode the string by comma to create an array
                $values = explode(",", $input);
                $array = array_combine($values, $values);
            }
    
            // Remove any empty elements from the array
            $array = array_filter($array, function ($value) {
                return $value !== '' && $value !== null;
            });
            return $array;
        }
        return [];
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {

        return $this->view('components.select');
    }
}
