<?php

namespace Rakeem\Protocol\Encapsulated;

class HurtArmorPacket extends EncapsulatedPacket {
    const headerID = 0x9d;

    const fieldsDefinition = [
        "health" => [
            "length" => 1,
            "format" => "C",
        ]
    ];

}
?>
