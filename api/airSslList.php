<?php
/* by air.airxyz.xyz */
 goto dHoJCpKLTS; CBegsSCYVl: NaryUmKqLw: if (!($row = mysqli_fetch_assoc($res))) { goto CWjkeHAsfO; } $a2 = array(); foreach ($row as $key => $value) { $a2[$key] = $value; mQss1PsAtq: } lODpyvRGzs: goto U28vs9F3Wg; H3yJlcJR9K: echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); mysqli_close($link); return; goto eJbu1g4rfN; LPAFJAvjgm: goto VgroTRoVD6; dHoJCpKLTS: date_default_timezone_set("\101\163\151\x61\57\x53\x68\x61\156\x67\150\x61\151"); header("\101\x63\143\145\x73\x73\55\x43\157\x6e\164\x72\x6f\154\x2d\x41\154\x6c\x6f\x77\55\117\x72\151\x67\151\156\72\x20\52"); $arrBack = array("\145\x72\162\x4e\165\x6d" => "\60", "\162\x65\164\x4d\163\x67" => "\xe6\232\202\346\x97\240\346\x8f\220\347\244\272", "\x72\145\x74\104\141\164\x61" => array()); $email = $_POST["\x65\x6d\141\x69\x6c"]; if ($email) { goto J5NhQU57zm; } goto yv_90jRy9N; YUffDDd12W: $resNum = mysqli_num_rows($res); if ($resNum < 1) { goto E1YJQids6l; } $result = mysqli_fetch_assoc($res); if ($result["\x69\x73\x41\144\155\x69\x6e"] == "\61") { goto LPAFJAvjgm; } $arrBack["\162\x65\164\115\x73\147"] = "\xe4\xbd\xa0\xe4\xb8\215\xe6\x98\xaf\xe7\256\xa1\347\x90\x86\xe5\221\230"; goto H3yJlcJR9K; dqxMwN0Qvf: WzT6zTRFY0: $arrBack["\145\162\162\116\165\x6d"] = "\61"; $arrBack["\162\x65\x74\115\x73\x67"] = "\346\xad\244\351\202\256\347\xae\xb1\x20" . $email . "\40\xe6\232\202\346\227\240\x73\163\154\345\x88\227\xe8\xa1\250\xe8\256\xb0\xe5\275\x95"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); mysqli_close($link); goto V3v_w_vmQB; VgroTRoVD6: $sql = "\x73\x65\x6c\x65\143\x74\40\x2a\x20\x66\162\157\155\40\x73\163\x6c\114\151\163\x74\x20"; $res = mysqli_query($link, $sql); $resNum = mysqli_num_rows($res); if ($resNum < 1) { goto WzT6zTRFY0; } $arr = array(); goto CBegsSCYVl; Gap1nP5Ul7: $arrBack["\x72\x65\x74\x4d\x73\147"] = "\xe9\x82\xae\347\xae\261\346\xa0\xbc\xe5\xbc\x8f\351\224\231\xe8\xaf\xaf"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); return; pyCK5cXgTG: $json_data = json_decode(file_get_contents("\x2e\x2e\x2f\151\x6e\x66\157\x2e\x6a\x73\157\156"), true); goto mFoq2CcnDd; KjT26QOq0r: $arrBack["\162\x65\164\115\163\x67"] = "\xe6\227\xa0\xe6\x9d\x83\xe9\x99\x90\xe7\224\xa8\346\x88\xb7"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); mysqli_close($link); return; goto AtH71mc2xa; U28vs9F3Wg: $arr[] = $a2; goto NaryUmKqLw; CWjkeHAsfO: $arrBack["\x65\162\x72\116\165\x6d"] = "\61"; $arrBack["\162\x65\x74\x4d\163\147"] = "\350\x8e\xb7\345\217\x96\40\x73\163\x6c\40\xe5\x88\227\350\241\250\xe6\225\260\xe6\x8d\xae\xe6\x88\220\345\212\x9f"; goto Ws2k3xZ7sP; Ws2k3xZ7sP: $arrBack["\162\145\164\x44\141\x74\x61"] = $arr; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); mysqli_close($link); return; goto GrWSvboAhx; goto dqxMwN0Qvf; mFoq2CcnDd: $link = mysqli_connect($json_data["\163\161\154\137\150\x6f\x73\164\156\x61\x6d\x65"] . "\72\63\x33\x30\66", $json_data["\x73\x71\x6c\137\x75\163\x65\x72\156\141\x6d\145"], $json_data["\x73\x71\x6c\x5f\x70\x61\x73\x73\x77\144"]); if ($link) { goto qpg3fhMzkv; } $arrBack["\162\x65\x74\x4d\x73\x67"] = "\346\225\260\xe6\x8d\xae\xe5\272\223\350\277\236\xe6\216\245\345\xa4\261\xe8\xb4\xa5"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); return; goto ZOHFZcj03h; ZOHFZcj03h: qpg3fhMzkv: mysqli_set_charset($link, "\x75\x74\x66\70"); mysqli_select_db($link, $json_data["\163\x71\x6c\x5f\x75\163\x65\162\x6e\x61\155\x65"]); $sql = "\x73\145\154\x65\143\164\x20\52\x20\146\x72\157\155\x20\165\163\x65\162\40\x77\x68\145\162\145\40\145\x6d\x61\151\154\40\75\40\47{$email}\47\40"; $res = mysqli_query($link, $sql); goto YUffDDd12W; yv_90jRy9N: $arrBack["\162\x65\x74\115\x73\147"] = "\xe8\xaf\xb7\xe8\276\223\345\x85\245\xe9\202\256\xe7\256\261"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); return; J5NhQU57zm: if (filter_var($email, FILTER_VALIDATE_EMAIL)) { goto pyCK5cXgTG; } goto Gap1nP5Ul7; V3v_w_vmQB: return; GrWSvboAhx: eJbu1g4rfN: goto S2EmvIT8Wf; E1YJQids6l: goto KjT26QOq0r; AtH71mc2xa: S2EmvIT8Wf: