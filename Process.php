<?php
$videos =[
    0=>  "https://www.youtube.com/watch?v=GhfQdJcyunc",
    1=>  "https://www.youtube.com/watch?v=70YywT4_mls",
    2=>  "https://www.youtube.com/watch?v=Gs17gzDr6zA",
    3=>  "https://www.youtube.com/watch?v=fwGU5G-lCRE",
    4=>  "https://www.youtube.com/watch?v=F1eI9H-KHAY",
    5=>  "https://www.youtube.com/watch?v=ACQt0IBNT54",
    6=>  "https://www.youtube.com/watch?v=3U3Wb4ko4kw",
    7=>  "https://www.youtube.com/watch?v=mtPXeZZ6z_s",
    8=>  "https://www.youtube.com/watch?v=n09EUWDuIoY",
    9=>  "https://www.youtube.com/watch?v=A_ylcIuW0Zo",
    10=> "https://www.youtube.com/watch?v=qr_3vf0-GrA",
    11=> "https://www.youtube.com/watch?v=JlGTJtDHkr0",
    12=> "https://www.youtube.com/watch?v=kbR3JDNE1nA",
    13=> "https://www.youtube.com/watch?v=YUohm2CrVfY",
    14=> "https://www.youtube.com/watch?v=J3AEdMAhx9E",
    15=> "https://www.youtube.com/watch?v=qc89LiBtK2c",
    16=> "https://www.youtube.com/watch?v=UkXOPWwT2m8",
    17=> "https://www.youtube.com/watch?v=mlQgBejNPtk",
    18=> "https://www.youtube.com/watch?v=lNBTfCIhR0I",
    19=> "https://www.youtube.com/watch?v=I46ok1heKZ0",
    20=> "https://www.youtube.com/watch?v=M_6L7tcdTRQ",
    21=> "https://www.youtube.com/watch?v=Wu-tKEGMpeY",
    22=> "https://www.youtube.com/watch?v=7vIDzajMY6M",
    23=> "https://www.youtube.com/watch?v=I7Noa3aqbig",
    24=> "https://www.youtube.com/watch?v=XM22JPA6F3g",
    25=> "https://www.youtube.com/watch?v=81m4J-Ruacc",
    26=> "https://www.youtube.com/watch?v=kSXxxjavVjc",
    27=> "https://www.youtube.com/watch?v=h0vg0RC-_Qw",
    28=> "https://www.youtube.com/watch?v=iJr9qupDb-s",
    29=> "https://www.youtube.com/watch?v=qhHwbUO4EhY",
    30=> "https://www.youtube.com/watch?v=_LlYC3LUWU4",
    31=> "https://www.youtube.com/watch?v=WxCrW_5hUjI",
    32=> "https://www.youtube.com/watch?v=pBjxnHCM4nY",
    33=> "https://www.youtube.com/watch?v=NFxRA46pSVA",
    34=> "https://www.youtube.com/watch?v=yfIBWc_lb5U",
    35=> "https://www.youtube.com/watch?v=Vh0rYS29XFE",
    36=> "https://www.youtube.com/watch?v=IkHezJ7aIRE",
    37=> "https://www.youtube.com/watch?v=GyYRaG01WxI",
    38=> "https://www.youtube.com/watch?v=t7L38ena-lw",
    39=> "https://www.youtube.com/watch?v=BAF79RpHlbs",
    40=> "https://www.youtube.com/watch?v=kcVtnnaNwpY",
    41=> "https://www.youtube.com/watch?v=r_GvCItGlr0",
    42=> "https://www.youtube.com/watch?v=2ALAQg1eMWY", // => video do veio
    43=> "https://www.youtube.com/watch?v=JuQoa6HheJ0",
    44=> "https://www.youtube.com/watch?v=oXp0hTkXiks",
    45=> "https://www.youtube.com/watch?v=qWP3W43UQ8I",
    46=> "https://www.youtube.com/watch?v=pCqeJNVLoJQ",
    47=> "https://www.youtube.com/watch?v=dPr4DVnuUf8",
    48=> "https://www.youtube.com/watch?v=4qBg_WzqAp8",
    49=> "https://www.youtube.com/watch?v=Q-rJe-jnpQw",
    50=> "https://www.youtube.com/watch?v=dQw4w9WgXcQ", // => never gonna give you up
];

$chosen_one = rand(1,count($videos)-1);


$var = $videos[$chosen_one];

header("Location:{$var}");
