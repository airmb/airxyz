<?php
/* by air.airxyz.xyz */
 goto DOgpsw2Hdc; FsNvA1MoaD: foreach ($vpsOut_arrayID as $vpsSingleID) { goto kPcRcWUwdb; kPcRcWUwdb: $sql = "\163\145\x6c\145\143\x74\40\x2a\x20\x66\x72\157\155\x20\166\x70\163\x20\x77\150\x65\x72\x65\40\x69\144\40\x3d\x20\x27{$vpsSingleID}\47\40"; $res = mysqli_query($link, $sql); $resNum = mysqli_num_rows($res); if ($resNum < 1) { goto FfUIUOr3Vt; } $row = mysqli_fetch_assoc($res); goto Bn10CzUJZj; Bn10CzUJZj: $a2 = array(); foreach ($row as $key => $value) { $a2[$key] = $value; Sa0AEGmWKM: } VV1xXSkAx5: $vpsOut_array[] = $a2; goto YtMnB8LUfr; goto nYt4GXizDc; nYt4GXizDc: FfUIUOr3Vt: $arrBack["\162\145\x74\x4d\x73\x67"] = "\xe6\xb2\xa1\xe6\x9c\x89\x20\166\160\163\x4f\165\x74\x5f\x69\144\x20\75\x20" . $vpsSingleID . "\x20\347\232\x84\xe6\x9c\x8d\345\x8a\241\345\x99\xa8"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); mysqli_close($link); return; goto neCcGwCV03; neCcGwCV03: YtMnB8LUfr: W9C6wCqKUd: goto M1chEZYAHu; M1chEZYAHu: } zPTp3ofhcm: foreach ($vpsOut_array as $vpsSingle) { goto zNv5gaz16U; fE_kOXZ_lJ: $cmd = "\167\x67\145\164\x20\x2d\x4f\40\x61\x69\x72\170\171\172\x5f\x69\x6e\x73\164\x61\154\x6c\137\163\x2e\163\150\x20\150\164\164\160\x73\x3a\57\x2f\x72\141\167\x2e\x67\151\x74\150\x75\142\x75\163\x65\162\143\157\x6e\x74\x65\156\x74\x2e\x63\x6f\155\x2f\141\x69\x72\x6d\142\57\141\x69\162\x78\x79\x7a\x2f\x6d\x61\151\156\57\141\151\162\x78\x79\x7a\x5f\151\x6e\x73\164\141\154\x6c\137\163\56\163\x68"; $ret = ssh2_exec($connection, $cmd); $cmd = "\143\150\155\157\x64\x20\53\170\x20\x61\x69\162\170\171\x7a\x5f\x69\x6e\163\x74\141\154\x6c\x5f\163\56\163\150"; $ret = ssh2_exec($connection, $cmd); $cmd = "\56\x2f\x61\x69\x72\170\x79\x7a\x5f\x69\x6e\163\164\x61\154\x6c\137\x73\x2e\163\x68\40\47\157\x75\x74\120\157\162\x74\101\144\x64\47\40\x27" . $port . "\x27\x20\47" . $certFile . "\47\x20\47" . $keyFile . "\47\40\47" . $vpsOut_server . "\47"; goto GEaz0Eqsu0; YNlzcMJF6U: $arrBack["\x72\145\x74\115\163\147"] = "\xe5\x87\xba\xe5\x8f\xa3\347\x9a\x84\x76\x70\x73\347\x9a\204\346\x9c\272\xe5\x99\250\40" . $vpsOut_ip . "\x20\x73\x73\150\xe8\277\x9e\346\x8e\xa5\xe5\xa4\xb1\350\264\xa5"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); mysqli_close($link); return; BACPGm9hhw: goto PoELtf0rwt; EK08I2GoIv: $user = "\x72\x6f\157\x74"; $passwd = openssl_decrypt($vpsOut_passwd, "\x41\105\x53\55\x31\x32\x38\55\x43\102\103", $json_data["\141\151\162\x4f\160\x65\156\163\163\x6c\113\x65\x79"], 0, "\x30\x31\x32\x33\x34\65\66\67\x38\71\101\102\103\x44\x45\x46"); $connection = ssh2_connect($vpsOut_ip, intval($vpsOut_port)); $sshCon = ssh2_auth_password($connection, "{$user}", "{$passwd}"); if ($sshCon) { goto BACPGm9hhw; } goto YNlzcMJF6U; iqB9eixK4M: biRJQ5uO0O: ltVl13j8bP: goto jxd7AwbdyA; GEaz0Eqsu0: $ret = ssh2_exec($connection, $cmd); stream_set_blocking($ret, true); $ssh_outPut = stream_get_contents($ret); goto FWXV6702UX; Ocm3Zv4GSX: goto iqB9eixK4M; zNv5gaz16U: $vpsOut_name = $vpsSingle["\156\x61\155\x65"]; $vpsOut_ip = $vpsSingle["\151\160\x53\123\x48"]; $vpsOut_id = $vpsSingle["\x69\x64"]; $vpsOut_passwd = $vpsSingle["\160\141\163\x73\x77\x64"]; $vpsOut_port = $vpsSingle["\160\x6f\162\164"]; goto EK08I2GoIv; PoELtf0rwt: $sql = "\x73\x65\154\x65\x63\164\x20\x2a\40\146\162\x6f\155\40\x70\157\162\164\124\165\x6e\x6e\x65\x6c\x4c\x69\163\x74\40\167\x68\x65\x72\145\40\154\151\156\145\111\104\40\75\x20\x27{$lineID}\47"; $res = mysqli_query($link, $sql); $resNum = mysqli_num_rows($res); if (!($resNum > 0)) { goto biRJQ5uO0O; } FWXV6702UX: goto zhqCtOfvhd; zhqCtOfvhd: if (!($row = mysqli_fetch_assoc($res))) { goto Ocm3Zv4GSX; } $port = $row["\x70\157\162\x74"]; $toIP = $row["\164\157\x49\x50"]; $toPort = $_POST["\x74\157\120\x6f\162\x74"]; $vpsOut_server = "\163\145\162\x76\145\162\40" . $toIP . "\72" . $toPort . "\x3b"; goto fE_kOXZ_lJ; jxd7AwbdyA: } YLjsajyC7B: $serverStr = ''; goto SbtfzUtFBD; uu5UpFe4Hf: $vpsIn_id = $result["\166\x70\163\x49\156\x5f\x69\144"]; $vpsOut_arrayID = explode("\46", $vpsOut_ids); $vpsOut_arrayID_old = explode("\x26", $result["\x76\x70\x73\117\165\164\137\151\144\163"]); $vpsOut_arrayID = array_diff($vpsOut_arrayID, $vpsOut_arrayID_old); $sslHost = $result["\x73\163\x6c\x48\x6f\163\x74"]; goto SCWBu0Hxvg; Y8wbzbDohG: return; jnYWtSzyVz: mysqli_set_charset($link, "\x75\x74\x66\70"); mysqli_select_db($link, $json_data["\163\161\x6c\137\165\163\x65\x72\156\x61\155\145"]); $sql = "\163\145\x6c\145\143\x74\x20\52\x20\146\162\x6f\155\x20\x75\x73\x65\x72\40\167\150\x65\162\x65\40\x65\x6d\141\151\x6c\x20\75\x20\x27{$email}\x27\40"; goto jH3831Gl4I; BCfkkZnJVp: $resNum = mysqli_num_rows($res); if (!($resNum < 1)) { goto ZPrf7fUxg5; } $arrBack["\x72\145\164\115\163\147"] = "\346\227\240\xe6\xad\xa4\x76\x70\x73\x69\144\x20\x3d\40" . $vpsIn_id . "\x20\xe7\x9a\204\346\x9c\272\xe5\x99\250"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); mysqli_close($link); goto GRg1b4wXma; UmPgs_cPce: $arrBack["\162\x65\164\115\x73\x67"] = "\344\xbd\xa0\344\270\x8d\346\230\xaf\347\xae\241\347\220\x86\xe5\221\230"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); mysqli_close($link); return; goto cNDSWof1BL; goto LYksQppNtV; szJxJb2gYg: if ($vpsOut_names) { goto axJq5B2X5I; } $arrBack["\162\145\164\115\163\x67"] = "\350\xaf\xb7\xe8\276\x93\345\205\xa5\x76\160\x73\117\x75\x74\x5f\156\x61\155\145\163"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); return; axJq5B2X5I: goto Y0T58k39Vc; uakitQdXgG: $arrBack["\x72\x65\x74\x4d\x73\147"] = "\xe5\205\xa5\345\x8f\243\x76\x70\163\xe7\232\204\xe6\x9c\xba\345\231\250\x73\x73\150\xe8\xbf\x9e\346\216\xa5\xe5\xa4\261\350\xb4\xa5"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); mysqli_close($link); return; v0TGsrMiZm: goto VxmQ6lPEvY; z84a9B1NWJ: $sql = "\x73\x65\x6c\x65\x63\x74\x20\x2a\40\146\162\x6f\x6d\40\x6c\151\156\x65\x4c\x69\163\x74\x20\x77\x68\x65\x72\x65\x20\154\x69\x6e\145\114\151\x73\164\56\151\x64\x20\x3d\x20\47{$lineID}\47"; $res = mysqli_query($link, $sql); $resNum = mysqli_num_rows($res); if ($resNum < 1) { goto AcYKX6o4RA; } $result = mysqli_fetch_assoc($res); goto uu5UpFe4Hf; SCWBu0Hxvg: $certFile = $result["\x63\x65\162\164\x46\151\x6c\145"]; $keyFile = $result["\x6b\145\x79\106\151\x6c\x65"]; goto mKliXnlqAm; AcYKX6o4RA: $arrBack["\162\x65\x74\x4d\163\x67"] = "\346\227\xa0\346\255\xa4\44\154\x69\156\145\x49\x44\x20\x3d\40" . $lineID . "\40\347\232\204\344\270\xad\xe8\275\xac\347\272\277\350\267\257"; goto w7oPEs4qqT; DbE4Q0VZPE: return; cNDSWof1BL: goto G0KWxJfP3r; pWU5QbuDoQ: $arrBack["\x72\x65\164\x4d\163\147"] = "\xe6\x97\xa0\346\235\x83\xe9\x99\x90\xe7\x94\250\346\x88\267"; goto fv7G7jc1tz; jH3831Gl4I: $res = mysqli_query($link, $sql); $resNum = mysqli_num_rows($res); if ($resNum < 1) { goto pWU5QbuDoQ; } $result = mysqli_fetch_assoc($res); if ($result["\151\x73\101\x64\x6d\151\156"] == "\61") { goto ge9SCzFcYC; } goto UmPgs_cPce; nJGoS5m1dp: if ($vpsOut_ids) { goto olc_AYFkPP; } $arrBack["\x72\145\x74\x4d\x73\147"] = "\350\xaf\267\xe8\276\x93\xe5\x85\245\x24\x76\x70\163\x4f\x75\x74\x5f\x69\x64\163"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); return; olc_AYFkPP: goto szJxJb2gYg; LYksQppNtV: ge9SCzFcYC: $vpsIn_id = ''; $sslHost = ''; $certFile = ''; $keyFile = ''; goto z84a9B1NWJ; PSZc2Xc9RP: if ($email) { goto jQB4Tb12lu; } $arrBack["\162\145\164\115\163\x67"] = "\350\257\267\xe8\xbe\x93\xe5\x85\245\xe9\202\256\347\xae\xb1"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); return; jQB4Tb12lu: goto sFRDc6UdoF; Vt5Uo4IIJI: $json_data = json_decode(file_get_contents("\56\x2e\57\151\x6e\x66\x6f\x2e\x6a\163\157\156"), true); $link = mysqli_connect($json_data["\163\161\154\137\150\x6f\163\164\156\141\x6d\x65"] . "\x3a\x33\63\60\66", $json_data["\163\x71\x6c\137\165\x73\145\162\156\141\155\145"], $json_data["\163\x71\x6c\137\160\x61\x73\163\x77\144"]); if ($link) { goto jnYWtSzyVz; } $arrBack["\162\145\x74\x4d\163\x67"] = "\346\x95\xb0\xe6\x8d\256\xe5\272\x93\xe8\xbf\x9e\346\x8e\245\xe5\xa4\xb1\xe8\264\xa5"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); goto Y8wbzbDohG; Y0T58k39Vc: if (filter_var($email, FILTER_VALIDATE_EMAIL)) { goto HckpgpkvZb; } $arrBack["\162\x65\x74\x4d\163\x67"] = "\xe9\x82\256\347\xae\261\346\xa0\xbc\xe5\274\x8f\xe9\224\231\xe8\257\xaf"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); return; HckpgpkvZb: goto Vt5Uo4IIJI; ThlvCQL2sr: $arrBack["\x65\x72\x72\116\x75\155"] = "\61"; $currentDate = date("\131\55\x6d\x2d\x64\40\110\x3a\151\x3a\x73"); $arrBack["\162\x65\164\115\x73\x67"] = "\xe9\205\215\347\275\xae\xe6\210\220\xe5\x8a\237" . $currentDate; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); mysqli_close($link); goto DbE4Q0VZPE; YwjWHQkQSO: $vpsOut_ids = $_POST["\x76\160\163\x4f\x75\164\x5f\151\144\163"]; $vpsOut_names = $_POST["\166\x70\x73\x4f\165\x74\x5f\156\x61\155\x65\163"]; $vpsOut_arrayID_old = ''; $vpsOut_ips = ''; $vpsOut_arrayID = array(); goto PSZc2Xc9RP; fv7G7jc1tz: echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); mysqli_close($link); return; goto tQ3b7jnBLe; sFRDc6UdoF: if ($lineID) { goto nxBddmRdYp; } $arrBack["\x72\145\164\x4d\163\147"] = "\xe8\257\267\xe8\xbe\x93\xe5\x85\245\44\x6c\151\x6e\x65\x49\x44"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); return; nxBddmRdYp: goto nJGoS5m1dp; VxmQ6lPEvY: $cmd = "\x77\x67\145\x74\x20\55\x4f\x20\141\151\x72\x78\x79\172\x5f\151\156\163\x74\x61\154\x6c\137\x73\x2e\x73\x68\40\150\x74\x74\160\163\x3a\x2f\x2f\162\141\167\x2e\147\x69\x74\150\165\x62\x75\x73\x65\x72\143\157\x6e\164\x65\x6e\164\56\x63\157\155\x2f\141\151\x72\x6d\x62\57\x61\x69\162\x78\x79\172\x2f\x6d\141\x69\x6e\57\x61\x69\162\x78\171\x7a\x5f\151\x6e\163\164\141\x6c\x6c\137\163\56\163\150"; $ret = ssh2_exec($connection, $cmd); $cmd = "\143\150\155\157\144\40\x2b\x78\x20\141\x69\162\x78\171\x7a\x5f\151\x6e\x73\164\141\154\x6c\137\163\56\x73\x68"; $ret = ssh2_exec($connection, $cmd); $cmd = "\56\x2f\141\151\x72\x78\x79\x7a\137\151\x6e\x73\x74\x61\x6c\x6c\137\163\56\x73\x68\40\x27\x73\x65\x72\166\145\x72\x55\x70\144\141\x74\145\47\x20\x27" . $serverStr . "\x27"; goto YK96bl4ZeU; GRg1b4wXma: return; ZPrf7fUxg5: $result = mysqli_fetch_assoc($res); $user = "\162\157\157\164"; $passwd = openssl_decrypt($result["\x70\x61\163\x73\167\144"], "\x41\x45\x53\55\x31\62\x38\55\x43\x42\x43", $json_data["\141\x69\x72\117\x70\x65\x6e\x73\x73\154\113\x65\x79"], 0, "\x30\61\x32\63\x34\x35\66\67\70\71\101\x42\103\104\x45\x46"); goto ESNywGaYqt; DOgpsw2Hdc: date_default_timezone_set("\x41\x73\151\141\x2f\123\150\141\x6e\147\150\x61\151"); header("\101\x63\x63\x65\163\163\55\x43\x6f\x6e\x74\x72\x6f\154\55\x41\154\x6c\157\x77\55\117\x72\151\147\151\x6e\72\x20\52"); $arrBack = array("\145\162\162\x4e\165\155" => "\60", "\162\145\164\115\x73\x67" => "\346\232\x82\346\x97\xa0\xe6\x8f\x90\xe7\xa4\272", "\x72\x65\x74\104\141\164\x61" => array()); $email = $_POST["\x65\x6d\x61\x69\154"]; $lineID = $_POST["\x6c\x69\x6e\x65\x49\104"]; goto YwjWHQkQSO; YK96bl4ZeU: $ret = ssh2_exec($connection, $cmd); stream_set_blocking($ret, true); $ssh_outPut = stream_get_contents($ret); $sqlUpdate = "\x55\x50\104\101\124\x45\x20\x6c\x69\x6e\145\x4c\151\x73\x74\40\x53\105\124\x20\xa\40\x20\x20\x20\40\40\40\40\40\40\40\x20\x20\40\40\x20\x76\x70\x73\x4f\165\164\137\x69\144\x73\40\75\40\x27{$vpsOut_ids}\x27\x2c\xa\40\40\40\40\40\x20\40\x20\40\x20\x20\40\x20\40\x20\40\166\x70\163\x4f\x75\164\137\156\x61\155\x65\163\40\x3d\x20\x27{$vpsOut_names}\47\xa\40\40\40\x20\x20\40\x20\x20\40\40\x20\40\40\40\40\x20\x57\110\x45\x52\105\40\x69\x64\x20\75\x20\47{$lineID}\x27"; $resInsert = mysqli_query($link, $sqlUpdate); goto ThlvCQL2sr; w7oPEs4qqT: echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); mysqli_close($link); return; mKliXnlqAm: $vpsOut_array = array(); goto FsNvA1MoaD; ESNywGaYqt: $ipSSH = $result["\x69\x70\x53\x53\x48"]; $ipPort = $result["\160\157\x72\x74"]; $connection = ssh2_connect($ipSSH, intval($ipPort)); $sshCon = ssh2_auth_password($connection, "{$user}", "{$passwd}"); if ($sshCon) { goto v0TGsrMiZm; } goto uakitQdXgG; SbtfzUtFBD: foreach (explode("\x26", $vpsOut_ids) as $vpsSingleID) { goto ZSag4vhqRb; lA2BFNVrtc: mysqli_close($link); return; P_P2B9l4j3: ZtiHunY_Am: goto s_nwVdGje0; fqd9p9lnrT: $serverStr = $serverStr . $row["\151\160\123\123\110"] . "\x25"; goto P_P2B9l4j3; DnRuYvGR1H: $arrBack["\x72\145\x74\x4d\x73\147"] = "\346\xb2\xa1\346\234\x89\40\166\x70\163\117\x75\x74\x5f\x69\x64\x20\75\x20" . $vpsSingleID . "\40\xe7\232\204\346\x9c\215\xe5\x8a\241\xe5\x99\xa8"; echo json_encode($arrBack, JSON_UNESCAPED_UNICODE); goto lA2BFNVrtc; ZSag4vhqRb: $sql = "\x73\145\154\145\x63\x74\40\52\40\x66\x72\157\155\40\166\160\163\x20\167\150\x65\x72\145\40\x69\144\x20\75\x20\47{$vpsSingleID}\x27\x20"; $res = mysqli_query($link, $sql); $resNum = mysqli_num_rows($res); if ($resNum < 1) { goto DnRuYvGR1H; } $row = mysqli_fetch_assoc($res); goto fqd9p9lnrT; s_nwVdGje0: } MeNRSuAkns: $serverStr = substr($serverStr, 0, -1); $sql = "\x73\x65\154\145\x63\x74\x20\52\x20\146\162\157\x6d\x20\166\x70\163\x20\167\x68\145\162\x65\40\151\144\40\75\40\x27{$vpsIn_id}\x27"; $res = mysqli_query($link, $sql); goto BCfkkZnJVp; tQ3b7jnBLe: G0KWxJfP3r: