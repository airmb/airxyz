<?php
/* by air.airxyz.xyz */
 goto MTfcQgSBqU; HzoaOeIgdO: $email = $_POST["\145\x6d\141\151\x6c"]; $telegramIsPush = $_POST["\x74\145\x6c\x65\x67\162\141\155\x49\x73\x50\x75\x73\x68"]; $httpApi = $_POST["\x68\x74\x74\160\101\160\151"]; $httpIsPush = $_POST["\x68\164\x74\x70\x49\x73\120\x75\163\x68"]; if ($email) { goto a7cqcdbiYV; } goto WQ3lj7R1V9; KvKYqnTF1B: $data = json_decode($ipIsOpen, JSON_UNESCAPED_UNICODE); if ($data["\x74\143\x70"] != "\x4f\160\145\x6e") { goto SgnsNqXtPV; } $httpStatus = "\x31"; goto okCwvmGeT_; SgnsNqXtPV: goto n7x8KZLomW; igX4FY5Jc8: $httpApiStr = file_get_contents($httpApi); $httpIP = explode("\72", $httpApiStr)[0]; $httpPort = explode("\72", $httpApiStr)[1]; $ipIsOpenUrl = "\150\164\x74\160\163\x3a\57\x2f" . $_SERVER["\x53\105\122\126\105\122\137\x4e\101\x4d\x45"] . "\57\141\160\x69\x2f\x61\151\x72\x43\x68\145\143\x6b\x49\x50\56\160\x68\x70\77\151\160\75" . $httpIP . "\x26\x70\x6f\x72\x74\75" . $httpPort; $ipIsOpen = file_get_contents($ipIsOpenUrl); goto KvKYqnTF1B; kG1kXR4oSh: $result = mysqli_fetch_assoc($res); $arrBack["\145\162\x72\x4e\165\x6d"] = "\61"; $arrBack["\x72\x65\x74\115\163\x67"] = "\344\xbf\256\346\224\xb9\101\160\160\x6c\x65\111\104\x20\xe9\205\x8d\347\275\256\344\xbf\241\xe6\x81\257\xe6\x88\220\345\212\237"; $arrBack["\162\x65\x74\104\x61\x74\x61"] = $result; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); goto fg0Fa7Hra3; WQ3lj7R1V9: $arrBack["\162\x65\164\x4d\x73\147"] = "\xe8\xaf\267\350\276\x93\xe5\205\xa5\x65\155\141\x69\x6c"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); return; a7cqcdbiYV: $json_data = json_decode(file_get_contents("\56\56\57\x69\156\x66\157\56\152\163\157\x6e"), true); goto kXYDstH1M3; VTbff9Cefv: return; LHETfEWzMX: $httpStatus = "\60"; if (!($httpIsPush == "\x31")) { goto mPiFQs31Xr; } if (filter_var($httpApi, FILTER_VALIDATE_URL) === false) { goto KODSRqo9oh; } goto igX4FY5Jc8; G_UA7C9R1J: $httpStatus = "\x30"; $httpIsPush = "\x30"; $arrBack["\162\x65\x74\x4d\163\147"] = "\101\120\x49\xe5\234\xb0\xe5\235\x80\xe9\xaa\x8c\xe8\xaf\201\xe5\244\261\350\264\xa5"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); mysqli_close($link); goto hDWHB0fIdw; MTfcQgSBqU: date_default_timezone_set("\101\x73\151\x61\x2f\x53\150\x61\x6e\x67\x68\141\151"); header("\101\x63\x63\145\x73\x73\x2d\x43\157\x6e\x74\162\157\154\55\101\154\154\x6f\x77\55\117\x72\151\147\x69\156\72\40\52"); $arrBack = array("\x65\x72\x72\x4e\x75\x6d" => "\60", "\162\145\x74\x4d\x73\x67" => "\346\232\202\346\227\240\346\x8f\x90\xe7\xa4\xba", "\162\x65\x74\x44\x61\164\141" => array()); $telegramToken = $_POST["\164\145\154\145\147\162\x61\x6d\x54\x6f\x6b\145\156"]; $telegramChat_id = $_POST["\x74\x65\154\x65\x67\162\x61\155\x43\150\x61\x74\x5f\151\x64"]; goto HzoaOeIgdO; kXYDstH1M3: $link = mysqli_connect($json_data["\163\161\x6c\x5f\x68\157\x73\164\156\141\155\145"] . "\72\x33\x33\60\x36", $json_data["\x73\161\154\137\x75\163\x65\162\x6e\141\155\x65"], $json_data["\x73\x71\154\x5f\160\x61\163\x73\167\144"]); if ($link) { goto zmvz14dQwf; } $arrBack["\x72\145\164\115\163\x67"] = "\346\225\xb0\346\x8d\256\xe5\272\223\350\xbf\236\xe6\216\xa5\xe5\244\261\350\xb4\xa5"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); return; goto QUD8WDrdNB; hDWHB0fIdw: return; uMVr3Qef9y: mPiFQs31Xr: $sqlUpdate = "\125\x50\104\x41\x54\105\x20\x75\x73\x65\x72\x20\x53\x45\x54\40\xa\x20\40\x20\40\40\40\40\40\40\x20\x20\x20\x20\x20\40\40\x74\145\154\x65\147\162\141\155\x54\157\153\x65\156\40\75\x20\47{$telegramToken}\47\54\12\40\x20\x20\x20\40\40\40\40\40\x20\x20\40\x20\x20\40\40\x74\x65\154\145\147\x72\141\155\103\x68\141\x74\137\151\144\40\75\x20\x27{$telegramChat_id}\47\54\xa\x20\x20\x20\x20\x20\40\x20\x20\40\x20\40\40\x20\x20\40\40\x74\145\x6c\x65\147\162\141\155\111\163\x50\x75\163\x68\40\75\40\x27{$telegramIsPush}\x27\54\xa\40\x20\40\x20\40\x20\40\40\40\x20\40\x20\x20\40\40\40\x68\164\x74\160\101\160\151\40\x3d\40\x27{$httpApi}\x27\54\xa\40\x20\x20\x20\x20\40\40\x20\x20\40\40\40\40\x20\40\40\x68\x74\x74\x70\111\x73\120\x75\163\150\40\x3d\x20\x27{$httpIsPush}\x27\54\12\x20\40\40\x20\x20\x20\x20\40\40\40\40\40\40\40\x20\x20\150\164\164\x70\x53\x74\x61\164\x75\163\x20\x3d\40\x27{$httpStatus}\x27\12\40\40\40\40\40\x20\40\x20\40\x20\40\x20\x20\x20\40\x20\127\x48\105\x52\x45\40\x65\155\x61\x69\x6c\x20\75\40\47{$email}\x27"; $resInsert = mysqli_query($link, $sqlUpdate); goto ViiE0YJl6z; PcUS9fG9VJ: $resNum = mysqli_num_rows($res); if (!($resNum < 1)) { goto LHETfEWzMX; } $arrBack["\162\x65\x74\x4d\x73\147"] = "\346\x9c\xaa\xe6\211\xbe\345\x88\xb0\346\xad\xa4\xe7\x94\xa8\346\x88\xb7\x69\144\xe4\xbf\xa1\xe6\201\xaf"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); mysqli_close($link); goto VTbff9Cefv; fg0Fa7Hra3: mysqli_close($link); goto N7KS8_eyxC; ViiE0YJl6z: $sqlUpdate2 = "\125\x50\104\x41\124\105\x20\x61\x70\x69\144\40\123\x45\124\x20\12\x20\x20\40\x20\x20\40\x20\x20\40\x20\x20\x20\40\40\x20\40\x74\x65\154\145\x67\x72\141\x6d\124\x6f\153\145\156\x20\75\40\47{$telegramToken}\47\54\xa\x20\x20\40\40\x20\40\40\40\40\x20\x20\40\40\x20\x20\40\164\x65\x6c\x65\147\162\x61\155\x43\x68\141\x74\x5f\151\x64\x20\75\40\47{$telegramChat_id}\47\54\12\x20\40\40\40\x20\x20\x20\x20\40\40\40\x20\x20\x20\40\x20\x74\145\154\145\x67\x72\x61\x6d\111\163\x50\x75\x73\x68\40\x3d\x20\47{$telegramIsPush}\47\12\x20\x20\x20\40\40\x20\x20\40\40\x20\40\x20\40\x20\40\x20\x57\110\x45\x52\x45\40\165\x73\145\162\105\x6d\141\151\x6c\40\75\40\47{$email}\47"; $resInsert = mysqli_query($link, $sqlUpdate2); $sql = "\x73\145\x6c\x65\143\x74\x20\x2a\x20\x66\x72\157\x6d\40\165\x73\145\x72\40\x77\150\x65\162\x65\40\145\x6d\x61\x69\x6c\x20\75\40\x27{$email}\47\40"; $res = mysqli_query($link, $sql); $resNum = mysqli_num_rows($res); goto kG1kXR4oSh; QUD8WDrdNB: zmvz14dQwf: mysqli_set_charset($link, "\x75\164\146\70"); mysqli_select_db($link, $json_data["\163\x71\x6c\137\165\x73\145\162\156\141\155\145"]); $sql = "\163\145\x6c\145\x63\164\x20\x2a\40\x66\x72\x6f\x6d\x20\165\163\145\x72\x20\167\150\145\x72\x65\40\145\155\141\x69\154\x20\75\x20\x27{$email}\47\x20"; $res = mysqli_query($link, $sql); goto PcUS9fG9VJ; n7x8KZLomW: $httpStatus = "\x30"; $httpIsPush = "\60"; okCwvmGeT_: goto uMVr3Qef9y; KODSRqo9oh: goto G_UA7C9R1J; N7KS8_eyxC: return;