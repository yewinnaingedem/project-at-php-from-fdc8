<?php
        $alerts = [
            array(
                "type" => "alert-primary" ,
                "mainText" => "Primary!",
                "text" => "This is primary alert.",
            ),
            [
                "type" => "alert-secondary" ,
                "mainText" => "Secondary!",
                "text" => "This is secondary alert.",
            ],
            array(
                "type" => "alert-danger" ,
                "mainText" => "Danger!",
                "text" => "This is danger alert.",
            ),
            [
                "type" => "alert-warning" ,
                "mainText" => "Warning!",
                "text" => "This is warning alert.",
            ]
        ];

    //     <div class='alert alert-warning alert-dismissible fade show' role='alert'>
    //     <strong>Holy guacamole!</strong> You should check in on some of those fields below.
    //     <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    //       <span aria-hidden='true'>&times;</span>
    //     </button>
    //   </div>
      
        $alertsText = "";
        foreach ($alerts as $alert) {
            $alertsText .= "<div class='alert {$alert['type']} alert-dismissible fade show' role='alert'>";
                $alertsText .= "<strong>{$alert['mainText']}</strong>{$alert['type']}";
                $alertsText .= "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
            $alertsText .= "</div>";
        }

        echo $alertsText;
    
?>