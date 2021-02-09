<?php

    $arrayOne = Array
    (
        "_wvs_pro_swatch_option" => Array
            (
                "default_to_button" => "yes",
                "default_to_image" => "yes",
                "default_image_type_attribute" => "",
                "pa_color" => Array
                    (
                        "default_type" => "select",
                        "type" => "color",
                        "style" => "",
                        "show_tooltip" => "",
                        "image_size" => "",
                        "terms" => Array
                            (
                                "25" => Array
                                    (
                                        "type" => "color",
                                        "tooltip_type" => "",
                                        "tooltip_text" => "",
                                        "tooltip_image" => "",
                                        "image_id" => "",
                                        "color" => "#ededed",
                                        "is_dual_color" => "yes",
                                        "secondary_color" => "#d8d8d8",
                                    ),

                                "26" => Array
                                    (
                                        "type" => "color",
                                        "tooltip_type" => "",
                                        "tooltip_text" => "",
                                        "tooltip_image" => "",
                                        "image_id" => "",
                                        "color" => "",
                                        "is_dual_color" => "",
                                        "secondary_color" => "",
                                    ),

                                "27" => Array
                                    (
                                        "type" => "color",
                                        "tooltip_type" => "",
                                        "tooltip_text" => "",
                                        "tooltip_image" => "",
                                        "image_id" => "",
                                        "color" => "",
                                        "is_dual_color" => "",
                                        "secondary_color" => "",
                                    ),

                                "28" => Array
                                    (
                                        "type" => "color",
                                        "tooltip_type" => "",
                                        "tooltip_text" => "",
                                        "tooltip_image" => "",
                                        "image_id" => "",
                                        "color" => "",
                                        "is_dual_color" => "",
                                        "secondary_color" => "",
                                    ),
                            )

                    )

            )

    );

    $arrayTwo = Array
    (
        "_wvs_pro_swatch_option" => Array
            (
                "default_to_button" => "no",
                "default_to_image" => "yes",
                "default_image_type_attribute" => "",
                "pa_color" => Array
                    (
                        "default_type" => "select",
                        "type" => "color",
                        "style" => "",
                        "show_tooltip" => "",
                        "image_size" => "",
                        "terms" => Array
                            (
                                "28" => Array
                                    (
                                        "type" => "image",
                                        "tooltip_type" => "",
                                        "tooltip_text" => "",
                                        "tooltip_image" => "",
                                        "image_id" => "",
                                        "color" => "",
                                        "is_dual_color" => "",
                                        "secondary_color" => "",
                                    ),

                                "29" => Array
                                    (
                                        "type" => "color",
                                        "tooltip_type" => "",
                                        "tooltip_text" => "",
                                        "tooltip_image" => "",
                                        "image_id" => "",
                                        "color" => "",
                                        "is_dual_color" => "",
                                        "secondary_color" => "",
                                    ),

                                "30" => Array
                                    (
                                        "type" => "color",
                                        "tooltip_type" => "",
                                        "tooltip_text" => "",
                                        "tooltip_image" => "",
                                        "image_id" => "",
                                        "color" => "",
                                        "is_dual_color" => "",
                                        "secondary_color" => "",
                                    ),

                                "31" => Array
                                    (
                                        "type" => "color",
                                        "tooltip_type" => "",
                                        "tooltip_text" => "",
                                        "tooltip_image" => "",
                                        "image_id" => "",
                                        "color" => "",
                                        "is_dual_color" => "",
                                        "secondary_color" => "",
                                    )

                            )

                    )

            )

    );

    function array_merge_deep($arrays) {
        $result = array();
        foreach ($arrays as $array) {
            foreach ($array as $key => $value) {
                if (isset($result[$key]) && is_array($result[$key]) && is_array($value)) {
                    $result[$key] = array_merge_deep([$result[$key], $value]);
                } else {
                    $result[$key] = $value;
                }
            }
        }
        return $result;
    }

    $merged = array_merge_deep([$arrayOne, $arrayTwo]);
    print_r($merged);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form submit</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
    <form id="myForm">
        <div id="options">
            <input type="text" id="title" name="title" value="Tapan Kumer"><br>
            <input type="text" id="description" name="description" value="Das"><br>
        </div>

        <div id="wvs-pro-product-variable-swatches-options">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname" value="Tapan Kumer"><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname" value="Das"><br>

            <input type="radio" id="male" name="gender" value="male" checked>
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>

            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" selected>
            <label for="vehicle1"> I have a bike</label><br>
            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
            <label for="vehicle2"> I have a car</label><br>
            <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
        </div>

        <input type="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function(){
            $("#myForm").submit(function(event){
                event.preventDefault();
                alert('hello');
                // var formValues= $(this).serialize();

                // $.post("process_form.php", formValues, function(data){
                //     // Display the returned data in browser
                //     $("#result").html(data);
                // });
            });
        });

        pars
    </script>
</body>
</html>