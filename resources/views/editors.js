angular.module("main", ["ngFileUpload", "oitozero.ngSweetAlert", "angularModalService"]), angular.module("main").config(["$interpolateProvider", function(e) {
    e.startSymbol("{[{").endSymbol("}]}")
}]), rubberCases = {
    galaxygrandprimelite: {
        name: "Galaxy Grand Prime LITE",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "rubber/samsung/grandprimelite/gpl_back.png",
        templateI: "rubber/samsung/grandprimelite/gpl_template.png",
        coveri: "rubber/samsung/grandprimelite/gpl.png",
        templateWidth: 227,
        templateHeight: 525,
        templateStartTop: 63,
        templateStartLeft: 103
    }
}, posicionesDispositivos = {
    m4aqua: {
        name: "Xperia M4 Aqua",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-m4aqua.png",
        templateI: "template-m4aqua.png",
        coveri: "cover-m4aqua.png",
        templateWidth: 377,
        templateHeight: 547,
        templateStartTop: 50,
        templateStartLeft: 55
    },    
    xperiac5: {
        name: "Xperia C5",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-xperiac5.png",
        templateI: "template-xperiac5.png",
        coveri: "cover-xperiac5.png",
        templateWidth: 368,
        templateHeight: 552,
        templateStartTop: 43,
        templateStartLeft: 55
    },
    xperiaz5: {
        name: "Xperia Z5",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "sony/z5/sony_z5_back.png",
        templateI: "sony/z5/sony_z5_template.png",
        coveri: "sony/z5/sony_z5.png",
        templateWidth: 339,
        templateHeight: 523,
        templateStartTop: 64,
        templateStartLeft: 70
    },
    xperiaz3: {
        name: "Xperia Z3",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-xperiaz3.png",
        templateI: "template-xperiaz3.png",
        coveri: "cover-xperiaz3.png",
        templateWidth: 339,
        templateHeight: 524,
        templateStartTop: 58,
        templateStartLeft: 160
    },
    xperiaz2: {
        name: "Xperia Z2",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-xperiaz2.png",
        templateI: "template-xperiaz2.png",
        coveri: "cover-xperiaz2.png",
        templateWidth: 337,
        templateHeight: 522,
        templateStartTop: 48,
        templateStartLeft: 147
    },
    xperiaz1: {
        name: "Xperia Z1",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-xperiaz1.png",
        templateI: "template-xperiaz1.png",
        coveri: "cover-xperiaz1.png",
        templateWidth: 342,
        templateHeight: 502,
        templateStartTop: 69,
        templateStartLeft: 144
    },
    xperiam5: {
        name: "Xperia M5",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "sony/m5/sony_m5_back.png",
        templateI: "sony/m5/sony_m5_template.png",
        coveri: "sony/m5/sony_m5.png",
        templateWidth: 327,
        templateHeight: 463,
        templateStartTop: 94,
        templateStartLeft: 75
    },
    xperiam2: {
        name: "Xperia M2",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-xperiam2.png",
        templateI: "template-xperiam2.png",
        coveri: "cover-xperiam2.png",
        templateWidth: 333,
        templateHeight: 510,
        templateStartTop: 62,
        templateStartLeft: 159
    },
    xperiae4: {
        name: "Xperia E4",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-xperiae4.png",
        templateI: "template-xperiae4.png",
        coveri: "cover-xperiae4.png",
        templateWidth: 388,
        templateHeight: 517,
        templateStartTop: 61,
        templateStartLeft: 53
    },
    xperiat2: {
        name: "Xperia T2 ULTRA",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "sony/t2/sony_t2_back.png",
        templateI: "sony/t2/sony_t2_template.png",
        coveri: "sony/t2/sony_t2.png",
        templateWidth: 304,
        templateHeight: 468,
        templateStartTop: 91,
        templateStartLeft: 88
    },
    galaxye7: {
        name: "Galaxy E7",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-galaxye7.png",
        templateI: "template-galaxye7.png",
        coveri: "cover-galaxye7.png",
        templateWidth: 352,
        templateHeight: 529,
        templateStartTop: 48,
        templateStartLeft: 148
    },
    galaxye5: {
        name: "Galaxy E5",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "samsung/galaxy/e5/e5_back.png",
        templateI: "samsung/galaxy/e5/e5_template.png",
        coveri: "samsung/galaxy/e5/e5.png",
        templateWidth: 333,
        templateHeight: 500,
        templateStartTop: 62,
        templateStartLeft: 158
    },
    galaxya72016: {
        name: "Galaxy A7 2016",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "samsung/galaxy/a72016/galaxy_a72016_back.png",
        templateI: "samsung/galaxy/a72016/galaxy_a72016_template.png",
        coveri: "samsung/galaxy/a72016/galaxy_a72016.png",
        templateWidth: 331,
        templateHeight: 536,
        templateStartTop: 57,
        templateStartLeft: 71
    },
    galaxya7: {
        name: "Galaxy A7",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "samsung/galaxy/a7/olda7_back.png",
        templateI: "samsung/galaxy/a7/olda7_template.png",
        coveri: "samsung/galaxy/a7/olda7.png",
        templateWidth: 342,
        templateHeight: 524,
        templateStartTop: 63,
        templateStartLeft: 68
    },
    galaxya52016: {
        name: "Galaxy A5 2016",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "samsung/galaxy/a52016/galaxy_a52016_back.png",
        templateI: "samsung/galaxy/a52016/galaxy_a52016_template.png",
        coveri: "samsung/galaxy/a52016/galaxy_a52016.png",
        templateWidth: 313,
        templateHeight: 508,
        templateStartTop: 71,
        templateStartLeft: 80
    },
    galaxya5: {
        name: "Galaxy A5",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "samsung/galaxy/a5/olda5_back.png",
        templateI: "samsung/galaxy/a5/olda5_template.png",
        coveri: "samsung/galaxy/a5/olda5.png",
        templateWidth: 329,
        templateHeight: 493,
        templateStartTop: 79,
        templateStartLeft: 75
    },
    galaxya3: {
        name: "Galaxy A3",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-galaxya3.png",
        templateI: "template-galaxya3.png",
        coveri: "cover-galaxya3.png",
        templateWidth: 302,
        templateHeight: 478,
        templateStartTop: 82,
        templateStartLeft: 169
    },
    galaxycore2: {
        name: "Galaxy Core 2",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-core2.png",
        templateI: "template-core2.png",
        coveri: "cover-core2.png",
        templateWidth: 327,
        templateHeight: 485,
        templateStartTop: 71,
        templateStartLeft: 161
    },
    galaxynote5: {
        name: "Galaxy Note 5",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "/samsung/galaxy/note5/note5_back.png",
        templateI: "/samsung/galaxy/note5/note5_template.png",
        coveri: "/samsung/galaxy/note5/note5.png",
        templateWidth: 354,
        templateHeight: 540,
        templateStartTop: 51,
        templateStartLeft: 80
    },
    galaxynote2: {
        name: "Galaxy Note 2",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "/samsung/galaxy/note2/samsung_galaxy_note2_back.png",
        templateI: "/samsung/galaxy/note2/samsung_galaxy_note2_template.png",
        coveri: "/samsung/galaxy/note2/samsung_galaxy_note2.png",
        templateWidth: 360,
        templateHeight: 520,
        templateStartTop: 65,
        templateStartLeft: 58
    },
    galaxynote3: {
        name: "Galaxy Note 3",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-note3.png",
        templateI: "template-note3.png",
        coveri: "cover-note3.png",
        templateWidth: 349,
        templateHeight: 529,
        templateStartTop: 50,
        templateStartLeft: 156
    },
    galaxynote4: {
        name: "Galaxy Note 4",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-note4.png",
        templateI: "template-note4.png",
        coveri: "cover-note4.png",
        templateWidth: 352,
        templateHeight: 541,
        templateStartTop: 48,
        templateStartLeft: 149
    },
    galaxyalpha: {
        name: "Galaxy Alpha",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-galaxyalpha.png",
        templateI: "template-galaxyalpha.png",
        coveri: "cover-galaxyalpha.png",
        templateWidth: 302,
        templateHeight: 491,
        templateStartTop: 67,
        templateStartLeft: 169
    },
    galaxys5mini: {
        name: "Galaxy S5 Mini",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-galaxys5mini.png",
        templateI: "template-galaxys5mini.png",
        coveri: "cover-galaxys5mini.png",
        templateWidth: 302,
        templateHeight: 478,
        templateStartTop: 62,
        templateStartLeft: 170
    },
    galaxys4mini: {
        name: "Galaxy S4 Mini",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-galaxys4mini.png",
        templateI: "template-galaxys4mini.png",
        coveri: "cover-galaxys4mini.png",
        templateWidth: 293,
        templateHeight: 441,
        templateStartTop: 84,
        templateStartLeft: 172
    },
    galaxys3mini: {
        name: "Galaxy S3 Mini",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-galaxys3mini.png",
        templateI: "template-galaxys3mini.png",
        coveri: "cover-galaxys3mini.png",
        templateWidth: 302,
        templateHeight: 422,
        templateStartTop: 99,
        templateStartLeft: 168
    },
    galaxys7edge: {
        name: "Galaxy S7 Edge",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "samsung/galaxy/s7edge/galaxy_s7edge_back.png",
        templateI: "samsung/galaxy/s7edge/galaxy_s7edge_template.png",
        coveri: "samsung/galaxy/s7edge/galaxy_s7edge.png",
        templateWidth: 339,
        templateHeight: 523,
        templateStartTop: 64,
        templateStartLeft: 70
    },
    galaxys7: {
        name: "Galaxy S7",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "samsung/galaxy/s7/galaxy_s7_back.png",
        templateI: "samsung/galaxy/s7/galaxy_s7_template.png",
        coveri: "samsung/galaxy/s7/galaxy_s7.png",
        templateWidth: 339,
        templateHeight: 523,
        templateStartTop: 64,
        templateStartLeft: 70
    },
    galaxys6edge: {
        name: "Galaxy S6 Edge",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-galaxys6edge.png",
        templateI: "template-galaxys6edge.png",
        coveri: "cover-galaxys6edge.png",
        templateWidth: 321,
        templateHeight: 491,
        templateStartTop: 70,
        templateStartLeft: 162
    },
    galaxys6: {
        name: "Galaxy S6",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-galaxys6edge.png",
        templateI: "template-galaxys6edge.png",
        coveri: "cover-galaxys6edge.png",
        templateWidth: 321,
        templateHeight: 491,
        templateStartTop: 70,
        templateStartLeft: 162
    },
    galaxys5: {
        name: "Galaxy S5",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-galaxys5.png",
        templateI: "template-galaxys5.png",
        coveri: "cover-galaxys5.png",
        templateWidth: 333,
        templateHeight: 504,
        templateStartTop: 56,
        templateStartLeft: 167
    },
    galaxys4: {
        name: "Galaxy S4",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-galaxys4.png",
        templateI: "template-galaxys4.png",
        coveri: "cover-galaxys4.png",
        templateWidth: 315,
        templateHeight: 475,
        templateStartTop: 70,
        templateStartLeft: 162
    },
    galaxygrandmax: {
        name: "Galaxy Grand Max",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-grandmax.png",
        templateI: "template-grandmax.png",
        coveri: "cover-grandmax.png",
        templateWidth: 351,
        templateHeight: 496,
        templateStartTop: 75,
        templateStartLeft: 157
    },
    galaxygrandprime: {
        name: "Galaxy Grand Prime",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-grandprime.png",
        templateI: "template-grandprime.png",
        coveri: "cover-grandprime.png",
        templateWidth: 333,
        templateHeight: 519,
        templateStartTop: 56,
        templateStartLeft: 152
    },
    lgzero: {
        name: "LG ZERO",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "lg/zero/zero_back.png",
        templateI: "lg/zero/zero_template.png",
        coveri: "lg/zero/zero.png",
        templateWidth: 345,
        templateHeight: 520,
        templateStartTop: 65,
        templateStartLeft: 67
    },
    lgg5: {
        name: "LG G5",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "lg/g5/lg_g5_back.png",
        templateI: "lg/g5/lg_g5_template.png",
        coveri: "lg/g5/lg_g5.png",
        templateWidth: 332,
        templateHeight: 513,
        templateStartTop: 69,
        templateStartLeft: 74
    },
    lgg3stylus: {
        name: "LG G3 Stylus",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-lgg3stylus.png",
        templateI: "template-lgg3stylus.png",
        coveri: "cover-lgg3stylus.png",
        templateWidth: 346,
        templateHeight: 522,
        templateStartTop: 59,
        templateStartLeft: 140
    },
    lgg3: {
        name: "LG G3",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-lgg3.png",
        templateI: "template-lgg3.png",
        coveri: "cover-lgg3.png",
        templateWidth: 315,
        templateHeight: 504,
        templateStartTop: 70,
        templateStartLeft: 160
    },
    nexus5: {
        name: "Nexus 5",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-nexus5.png",
        templateI: "template-nexus5.png",
        coveri: "cover-nexus5.png",
        templateWidth: 317,
        templateHeight: 490,
        templateStartTop: 68,
        templateStartLeft: 176
    },
    motoe2: {
        name: "Moto E2",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "motorola/e2/e2_back.png",
        templateI: "motorola/e2/e2_template.png",
        coveri: "motorola/e2/e2.png",
        templateWidth: 354,
        templateHeight: 468,
        templateStartTop: 102,
        templateStartLeft: 73
    },
    motox2: {
        name: "Moto X2",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-motox2.png",
        templateI: "template-motox2.png",
        coveri: "cover-motox2.png",
        templateWidth: 321,
        templateHeight: 491,
        templateStartTop: 65,
        templateStartLeft: 170
    },
    motog2: {
        name: "Moto G2",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "/motorola/g2/motorola_g2_back.png",
        templateI: "/motorola/g2/motorola_g2_template.png",
        coveri: "/motorola/g2/motorola_g2.png",
        templateWidth: 346,
        templateHeight: 512,
        templateStartTop: 70,
        templateStartLeft: 65
    },
    motog: {
        name: "Moto G",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-motog.png",
        templateI: "template-motog.png",
        coveri: "cover-motog.png",
        templateWidth: 327,
        templateHeight: 466,
        templateStartTop: 84,
        templateStartLeft: 166
    },
    iphone6plus: {
        name: "Iphone 6/6s Plus",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-ip6p.png",
        templateI: "template-ip6p.png",
        coveri: "cover-ip6p.png",
        templateWidth: 364,
        templateHeight: 560,
        templateStartTop: 47,
        templateStartLeft: 159  
    },
    iphone6: {
        name: "Iphone 6/6s",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-ip6.png",
        templateI: "template-ip6.png",
        coveri: "cover-ip6.png",
        templateWidth: 304,
        templateHeight: 474,
        templateStartTop: 80,
        templateStartLeft: 172,
    },
    iphone5c: {
        name: "Iphone 5C",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-ip5c.png",
        templateI: "template-ip5c.png",
        coveri: "cover-ip5c.png",
        templateWidth: 296,
        templateHeight: 449,
        templateStartTop: 117,
        templateStartLeft: 167
    },
    iphone55s: {
        name: "Iphone 5/5s",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-ip5.png",
        templateI: "template-ip5.png",
        coveri: "cover-ip5.png",
        templateWidth: 296,
        templateHeight: 449,
        templateStartTop: 117,
        templateStartLeft: 167
    },
    ipod5: {
        name: "iPod 5",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "/apple/ipod5/apple_ipod5_back.png",
        templateI:"/apple/ipod5/apple_ipod5_template.png",
        coveri:"/apple/ipod5/apple_ipod5.png",
        templateWidth: 341,
        templateHeight: 562,
        templateStartTop: 46,
        templateStartLeft: 66        
    },
    iphone44s: {
        name: "Iphone 4/4s",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-ip4.png",
        templateI: "template-ip4.png",
        coveri: "cover-ip4.png",
        templateWidth: 304,
        templateHeight: 443,
        templateStartTop: 100,
        templateStartLeft: 160
    },
    bladel2plus: {
        name: "Blade L2 Plus",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-bladel2plus.png",
        templateI: "template-bladel2plus.png",
        coveri: "cover-bladel2plus.png",
        templateWidth: 364,
        templateHeight: 533,
        templateStartTop: 59,
        templateStartLeft: 59
    },
    galaxys6active: {
        name: "Galaxy S6 Active",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-galaxys6active.png",
        templateI: "template-galaxys6active.png",
        coveri: "cover-galaxys6active.png",
        templateWidth: 338,
        templateHeight: 517,
        templateStartTop: 60,
        templateStartLeft: 81
    },
    galaxys6edgeplus: {
        name: "Galaxy S6 Edge Plus",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-galaxys6edgeplus.png",
        templateI: "template-galaxys6edgeplus.png",
        coveri: "cover-galaxys6edgeplus.png",
        templateWidth: 338,
        templateHeight: 517,
        templateStartTop: 60,
        templateStartLeft: 81
    },
    htc626: {
        name: "HTC 626",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-htc626.png",
        templateI: "template-htc626.png",
        coveri: "cover-htc626.png",
        templateWidth: 368,
        templateHeight: 529,
        templateStartTop: 49,
        templateStartLeft: 46
    },
    htcm8: {
        name: "HTC M8",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-htcm8.png",
        templateI: "template-htcm8.png",
        coveri: "cover-htcm8.png",
        templateWidth: 340,
        templateHeight: 511,
        templateStartTop: 69,
        templateStartLeft: 71
    },
    lgg4: {
        name: "LG G4",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-lgg4.png",
        templateI: "template-lgg4.png",
        coveri: "cover-lgg4.png",
        templateWidth: 366,
        templateHeight: 537,
        templateStartTop: 56,
        templateStartLeft: 62
    },
    lgg4stylus: {
        name: "LG G4 Stylus",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-lgg4stylus.png",
        templateI: "template-lgg4stylus.png",
        coveri: "cover-lgg4stylus.png",
        templateWidth: 366,
        templateHeight: 537,
        templateStartTop: 54,
        templateStartLeft: 61
    },
    lgprolite: {
        name: "LG Pro Lite",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-lgprolite.png",
        templateI: "template-lgprolite.png",
        coveri: "cover-lgprolite.png",
        templateWidth: 348,
        templateHeight: 531,
        templateStartTop: 53,
        templateStartLeft: 60
    },
    motog3: {
        name: "Moto G3",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-motog3.png",
        templateI: "template-motog3.png",
        coveri: "cover-motog3.png",
        templateWidth: 404,
        templateHeight: 564,
        templateStartTop: 41,
        templateStartLeft: 42
    },
    motoxplay: {
        name: "Moto X Play",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-motoxplay.png",
        templateI: "template-motoxplay.png",
        coveri: "cover-motoxplay.png",
        templateWidth: 323,
        templateHeight: 488,
        templateStartTop: 85,
        templateStartLeft: 83
    },
    note5: {
        name: "Note 5",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-note5.png",
        templateI: "template-note5.png",
        coveri: "cover-note5.png",
        templateWidth: 354,
        templateHeight: 542,
        templateStartTop: 50,
        templateStartLeft: 79
    },
    galaxyj5: {
        name: "Galaxy J5",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-galaxyj5.png",
        templateI: "template-galaxyj5.png",
        coveri: "cover-galaxyj5.png",
        templateWidth: 352,
        templateHeight: 497,
        templateStartTop: 74,
        templateStartLeft: 69
    },
    galaxyj7: {
        name: "Galaxy J7",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "back-galaxyj7.png",
        templateI: "template-galaxyj7.png",
        coveri: "cover-galaxyj7.png",
        templateWidth: 376,
        templateHeight: 530,
        templateStartTop: 57,
        templateStartLeft: 57
    },
    galaxyj52016: {
        name: "Galaxy J5 2016",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "samsung/galaxy/j52016/galaxy_j52016_back.png",
        templateI: "samsung/galaxy/j52016/galaxy_j52016_template.png",
        coveri: "samsung/galaxy/j52016/galaxy_j52016.png",
        templateWidth: 352,
        templateHeight: 497,
        templateStartTop: 74,
        templateStartLeft: 69
    },
    galaxyj72016: {
        name: "Galaxy J7 2016",
        bx: 0,
        by: 0,
        tx: 0,
        ty: 0,
        backi: "samsung/galaxy/j72016/galaxy_j72016_back.png",
        templateI: "samsung/galaxy/j72016/galaxy_j72016_template.png",
        coveri: "samsung/galaxy/j72016/galaxy_j72016.png",
        templateWidth: 376,
        templateHeight: 530,
        templateStartTop: 57,
        templateStartLeft: 57
    }
}, angular.module("main").factory("fabricService", ["$q", "menuService", "$rootScope", "$window", function(e, a, t, o) {
    var l, n, c;
    return l = {
        globalProperties: {
            eyeDropping: !1,
            eyeDroppingFondoColor: "#FFFFFF",
            eyeDroppingTexto: !1,
            eyeDroppingTextoColor: "#00000",
            loadingx: !1,
            textoContenido: "",
            colorTexto: "#000000",
            colorFondo: "#FFFFFF",
            fontTexto: "Gotham-Book"
        },
        canvas: {
            fabricCanvas: new fabric.Canvas("c"),
            fabricCanvasFondoColor: new fabric.Canvas("fondoColorCanvas"),
            fabricCanvasFondoColorModal: new fabric.Canvas("fondoColorCanvasModal"),
            fabricCanvasTextoColor: new fabric.Canvas("textoColorCanvas"),
            fabricCanvasTextoColorModal: new fabric.Canvas("textoColorCanvasModal"),
            width: 0,
            height: 0,
            sized: 0,
            objetos: [],
            objCounter: 0,
            back: null,
            backScale: 1,
            collageScale: 1,
            scaleTop: 1,
            scaleLeft: 1,
            cover: null,
            backObject: null,
            template: null,
            initialWidth: null,
            templateBackground: null,
            collage: {
                collage: null,
                clipSelected: null,
                arrayOfAllElements: [],
                specificCollage: {
                    corazonEnMedio: {
                        clipSelected: null,
                        arrayOfAllElements: [],
                        circleNames: []
                    },
                    bolitas: {
                        clipSelected: null,
                        arrayOfAllElements: [],
                        circleNames: []
                    }
                },
                circleNames: [{
                    name: "a",
                    object: null,
                    group: null
                }, {
                    name: "b",
                    object: null,
                    group: null
                }, {
                    name: "c",
                    object: null,
                    group: null
                }, {
                    name: "d",
                    object: null,
                    group: null
                }, {
                    name: "e",
                    object: null,
                    group: null
                }, {
                    name: "f",
                    object: null,
                    group: null
                }]
            }
        },
        selected: {
            textoSelected: null,
            collageSeleccionado: null,
            dispositivoSeleccionado: "iphone6",
            lastSelectedObjects: {
                first: null,
                last: null
            }
        },
        borde: {
            objectBorder: null,
            bordearObjeto: {
                left: null,
                top: null,
                right: null,
                bottom: null
            },
            ultimoObjetoOvered: null
        },
        mode: {
            vistaPreviaV: !0
        },
        controles: {
            mostrandoControles: !1,
            escalando: !1,
            escalandoBL: !1,
            escalandoRight: !1,
            escalandoBR: !1,
            girando: !1,
            girandoCoors: {
                x: null,
                y: null
            },
            girandoAngle: 0,
            tl: {
                x: 0,
                y: 0
            },
            bl: {
                x: 0,
                y: 0
            },
            tr: {
                x: 0,
                y: 0
            },
            br: {
                x: 0,
                y: 0
            },
            tm: {
                x: 0,
                y: 0
            },
            del: {
                x: 0,
                y: 0,
                obj: null
            },
            edit: {
                x: 0,
                y: 0,
                obj: null
            }
        }
    }, n = {
        nuevoLeft: function(e, a) {
            return e - a + 2
        }
    }, c = {
        collage: {
            removeObjetoCollage: function(e) {
                l.canvas.fabricCanvas.remove(e), console.log("vamos a remover objeto de collage"), console.log();
                var a = (e.clip, []);
                angular.forEach(l.canvas.collage.arrayOfAllElements, function(t, o) {
                    t.fabricObj.nombre != e.nombre && a.push(t)
                }), l.canvas.collage.arrayOfAllElements = a
            },
            setCollage: function(e) {
                l.canvas.collage.collage = e, c.collage.changeCollage(e)
            },
            changeCollage: function(e) {
                "/images/collages/6.png" == e && (l.canvas.collage.circleNames = l.canvas.collage.specificCollage.corazonEnMedio.circleNames, console.log(l.canvas.collage.circleNames), l.canvas.collage.clipSelected = "d", c.fabricCanvasVistaEditorCollage()), "/images/collages/2.png" == e && (l.canvas.collage.circleNames = l.canvas.collage.specificCollage.bolitas.circleNames, console.log(l.canvas.collage.circleNames), l.canvas.collage.clipSelected = "a", c.fabricCanvasVistaEditorCollage())
            },
            mostrarContenidoClip: function(e) {},
            clips: {
                corazonEnMedio: function(e) {
                    var a = [],
                        t = new fabric.Rect({
                            width: (l.canvas.templateBackground.width / 2 - 5) * e,
                            height: (l.canvas.templateBackground.height / 2 - 5) * e,
                            originX: "center",
                            originY: "center",
                            fill: "red",
                            hasControls: !1,
                            hasBorders: !1,
                            lockMovementX: !0,
                            lockMovementY: !0,
                            top: l.canvas.fabricCanvas.height / 2 - l.canvas.templateBackground.height * e / 2 + (l.canvas.templateBackground.height / 2 - 5) * e / 2,
                            left: l.canvas.fabricCanvas.width / 2 - l.canvas.templateBackground.width * e / 2 + (l.canvas.templateBackground.width / 2 - 5) * e / 2
                        });
                    t.tipo = "clip", t.nombre = "a", t.on("selected", function() {
                        l.canvas.collage.clipSelected = this.nombre, c.fabricCanvasVistaEditorCollage()
                    }), l.canvas.collage.specificCollage.corazonEnMedio.circleNames.push({
                        object: t,
                        name: "a",
                        group: null
                    });
                    var o = new fabric.Rect({
                        width: (l.canvas.templateBackground.width / 2 - 5) * e,
                        height: (l.canvas.templateBackground.height / 2 - 5) * e,
                        originX: "center",
                        originY: "center",
                        fill: "red",
                        hasControls: !1,
                        hasBorders: !1,
                        lockMovementX: !0,
                        lockMovementY: !0,
                        top: l.canvas.fabricCanvas.height / 2 - l.canvas.templateBackground.height / 2 * e + (l.canvas.templateBackground.height / 2 - 5) * e / 2,
                        left: l.canvas.fabricCanvas.width / 2 + l.canvas.templateBackground.width / 2 * e - (l.canvas.templateBackground.width / 2 - 5) * e / 2
                    });
                    o.tipo = "clip", o.nombre = "b", o.on("selected", function() {
                        l.canvas.collage.clipSelected = this.nombre, c.fabricCanvasVistaEditorCollage()
                    }), l.canvas.collage.specificCollage.corazonEnMedio.circleNames.push({
                        object: o,
                        name: "b",
                        group: null
                    });
                    var n = new fabric.Rect({
                        width: (l.canvas.templateBackground.width / 2 - 5) * e,
                        height: (l.canvas.templateBackground.height / 2 - 5) * e,
                        originX: "center",
                        originY: "center",
                        fill: "red",
                        hasControls: !1,
                        hasBorders: !1,
                        lockMovementX: !0,
                        lockMovementY: !0,
                        top: l.canvas.fabricCanvas.height / 2 + l.canvas.templateBackground.height / 2 * e - (l.canvas.templateBackground.height / 2 - 5) * e / 2,
                        left: l.canvas.fabricCanvas.width / 2 - l.canvas.templateBackground.width / 2 * e + (l.canvas.templateBackground.width / 2 - 5) * e / 2
                    });
                    n.tipo = "clip", n.nombre = "c", n.on("selected", function() {
                        l.canvas.collage.clipSelected = this.nombre, c.fabricCanvasVistaEditorCollage()
                    }), l.canvas.collage.specificCollage.corazonEnMedio.circleNames.push({
                        object: n,
                        name: "c",
                        group: null
                    });
                    var r = new fabric.Rect({
                        width: (l.canvas.templateBackground.width / 2 - 5) * e,
                        height: (l.canvas.templateBackground.height / 2 - 5) * e,
                        originX: "center",
                        originY: "center",
                        fill: "red",
                        hasControls: !1,
                        hasBorders: !1,
                        lockMovementX: !0,
                        lockMovementY: !0,
                        top: l.canvas.fabricCanvas.height / 2 + l.canvas.templateBackground.height / 2 * e - (l.canvas.templateBackground.height / 2 - 5) * e / 2,
                        left: l.canvas.fabricCanvas.width / 2 + l.canvas.templateBackground.width / 2 * e - (l.canvas.templateBackground.width / 2 - 5) * e / 2
                    });
                    r.tipo = "clip", r.nombre = "d", r.on("selected", function() {
                        l.canvas.collage.clipSelected = this.nombre, c.fabricCanvasVistaEditorCollage()
                    }), l.canvas.collage.specificCollage.corazonEnMedio.circleNames.push({
                        object: r,
                        name: "d",
                        group: null
                    }), fabric.loadSVGFromURL("https://upload.wikimedia.org/wikipedia/commons/4/42/Love_Heart_SVG.svg", function(t, o) {
                        var n = new fabric.Group(a),
                            r = posicionesDispositivos[l.selected.dispositivoSeleccionado];
                        l.canvas.fabricCanvas.width / 2 - (r.templateStartLeft * e + r.templateWidth * e / 2 - l.canvas.template.width * e / 2), l.canvas.fabricCanvas.height / 2 - (r.templateStartTop * e + r.templateHeight * e / 2 - l.canvas.template.height * e / 2);
                        n.set({
                            scaleX: .3 * e,
                            scaleY: .3 * e,
                            originX: "center",
                            originY: "center",
                            hasControls: !1,
                            hasBorders: !1,
                            lockMovementX: !0,
                            lockMovementY: !0,
                            top: l.canvas.fabricCanvas.height / 2,
                            left: l.canvas.fabricCanvas.width / 2
                        }), n.tipo = "clip", n.nombre = "e", n.on("selected", function() {
                            l.canvas.collage.clipSelected = this.nombre, c.fabricCanvasVistaEditorCollage()
                        }), l.canvas.collage.specificCollage.corazonEnMedio.circleNames.push({
                            object: n,
                            name: "e",
                            group: null
                        })
                    }, function(e, t) {
                        t.set("id", e.getAttribute("id")), a.push(t)
                    })
                },
                bolitas: function(e) {
                    var a = l.canvas.fabricCanvas.height / 2,
                        t = l.canvas.fabricCanvas.width / 2,
                        o = new fabric.Circle({
                            originX: "center",
                            originY: "center",
                            radius: 20,
                            fill: "#FFFFFF",
                            top: a - 100,
                            left: t
                        }),
                        n = new fabric.Circle({
                            originX: "center",
                            originY: "center",
                            radius: 20,
                            fill: "#FFFFFF",
                            top: a - 100,
                            left: t + 70
                        }),
                        r = new fabric.Circle({
                            originX: "center",
                            originY: "center",
                            radius: 20,
                            fill: "#FFFFFF",
                            top: a - 50,
                            left: t - 50
                        }),
                        s = new fabric.Circle({
                            originX: "center",
                            originY: "center",
                            radius: 20,
                            fill: "#FFFFFF",
                            top: a - 50,
                            left: t + 40
                        }),
                        i = new fabric.Circle({
                            originX: "center",
                            originY: "center",
                            radius: 20,
                            fill: "#FFFFFF",
                            top: a - 50,
                            left: t + 130
                        }),
                        g = new fabric.Circle({
                            originX: "center",
                            originY: "center",
                            radius: 20,
                            fill: "#FFFFFF",
                            top: a,
                            left: t
                        }),
                        p = new fabric.Circle({
                            originX: "center",
                            originY: "center",
                            radius: 20,
                            fill: "#FFFFFF",
                            top: a,
                            left: t + 70
                        }),
                        d = new fabric.Circle({
                            originX: "center",
                            originY: "center",
                            radius: 20,
                            fill: "#FFFFFF",
                            top: a + 50,
                            left: t - 50
                        }),
                        v = new fabric.Circle({
                            originX: "center",
                            originY: "center",
                            radius: 20,
                            fill: "#FFFFFF",
                            top: a + 50,
                            left: t + 40
                        }),
                        b = new fabric.Circle({
                            originX: "center",
                            originY: "center",
                            radius: 20,
                            fill: "#FFFFFF",
                            top: a + 50,
                            left: t + 130
                        }),
                        f = new fabric.Circle({
                            originX: "center",
                            originY: "center",
                            radius: 20,
                            fill: "#FFFFFF",
                            top: a + 100,
                            left: t
                        }),
                        m = new fabric.Circle({
                            originX: "center",
                            originY: "center",
                            radius: 20,
                            fill: "#FFFFFF",
                            top: a + 100,
                            left: t + 70
                        }),
                        u = new fabric.Circle({
                            originX: "center",
                            originY: "center",
                            radius: 20,
                            fill: "#FFFFFF",
                            top: a + 150,
                            left: t - 50
                        }),
                        h = new fabric.Circle({
                            originX: "center",
                            originY: "center",
                            radius: 20,
                            fill: "#FFFFFF",
                            top: a + 150,
                            left: t + 40
                        }),
                        C = new fabric.Circle({
                            originX: "center",
                            originY: "center",
                            radius: 20,
                            fill: "#FFFFFF",
                            top: a + 150,
                            left: t + 130
                        });
                    o.tipo = "clip", o.nombre = "a", o.on("selected", function() {
                        l.canvas.collage.clipSelected = this.nombre, c.fabricCanvasVistaEditorCollage()
                    }), n.tipo = "clip", n.nombre = "b", n.on("selected", function() {
                        l.canvas.collage.clipSelected = this.nombre, c.fabricCanvasVistaEditorCollage()
                    }), r.tipo = "clip", r.nombre = "c", r.on("selected", function() {
                        l.canvas.collage.clipSelected = this.nombre, c.fabricCanvasVistaEditorCollage()
                    }), s.tipo = "clip", s.nombre = "d", s.on("selected", function() {
                        l.canvas.collage.clipSelected = this.nombre, c.fabricCanvasVistaEditorCollage()
                    }), i.tipo = "clip", i.nombre = "e", i.on("selected", function() {
                        l.canvas.collage.clipSelected = this.nombre, c.fabricCanvasVistaEditorCollage()
                    }), g.tipo = "clip", g.nombre = "f", g.on("selected", function() {
                        l.canvas.collage.clipSelected = this.nombre, c.fabricCanvasVistaEditorCollage()
                    }), p.tipo = "clip", p.nombre = "g", p.on("selected", function() {
                        l.canvas.collage.clipSelected = this.nombre, c.fabricCanvasVistaEditorCollage()
                    }), d.tipo = "clip", d.nombre = "h", d.on("selected", function() {
                        l.canvas.collage.clipSelected = this.nombre, c.fabricCanvasVistaEditorCollage()
                    }), v.tipo = "clip", v.nombre = "i", v.on("selected", function() {
                        l.canvas.collage.clipSelected = this.nombre, c.fabricCanvasVistaEditorCollage()
                    }), b.tipo = "clip", b.nombre = "j", b.on("selected", function() {
                        l.canvas.collage.clipSelected = this.nombre, c.fabricCanvasVistaEditorCollage()
                    }), f.tipo = "clip", f.nombre = "k", f.on("selected", function() {
                        l.canvas.collage.clipSelected = this.nombre, c.fabricCanvasVistaEditorCollage()
                    }), m.tipo = "clip", m.nombre = "l", m.on("selected", function() {
                        l.canvas.collage.clipSelected = this.nombre, c.fabricCanvasVistaEditorCollage()
                    }), u.tipo = "clip", u.nombre = "m", u.on("selected", function() {
                        l.canvas.collage.clipSelected = this.nombre, c.fabricCanvasVistaEditorCollage()
                    }), h.tipo = "clip", h.nombre = "n", h.on("selected", function() {
                        l.canvas.collage.clipSelected = this.nombre, c.fabricCanvasVistaEditorCollage()
                    }), C.tipo = "clip", C.nombre = "o", C.on("selected", function() {
                        l.canvas.collage.clipSelected = this.nombre, c.fabricCanvasVistaEditorCollage()
                    }), l.canvas.collage.specificCollage.bolitas.circleNames.push({
                        object: o,
                        name: "a",
                        group: null
                    }), l.canvas.collage.specificCollage.bolitas.circleNames.push({
                        object: n,
                        name: "b",
                        group: null
                    }), l.canvas.collage.specificCollage.bolitas.circleNames.push({
                        object: r,
                        name: "c",
                        group: null
                    }), l.canvas.collage.specificCollage.bolitas.circleNames.push({
                        object: s,
                        name: "d",
                        group: null
                    }), l.canvas.collage.specificCollage.bolitas.circleNames.push({
                        object: i,
                        name: "e",
                        group: null
                    }), l.canvas.collage.specificCollage.bolitas.circleNames.push({
                        object: g,
                        name: "f",
                        group: null
                    }), l.canvas.collage.specificCollage.bolitas.circleNames.push({
                        object: p,
                        name: "g",
                        group: null
                    }), l.canvas.collage.specificCollage.bolitas.circleNames.push({
                        object: d,
                        name: "h",
                        group: null
                    }), l.canvas.collage.specificCollage.bolitas.circleNames.push({
                        object: v,
                        name: "i",
                        group: null
                    }), l.canvas.collage.specificCollage.bolitas.circleNames.push({
                        object: b,
                        name: "j",
                        group: null
                    }), l.canvas.collage.specificCollage.bolitas.circleNames.push({
                        object: f,
                        name: "k",
                        group: null
                    }), l.canvas.collage.specificCollage.bolitas.circleNames.push({
                        object: m,
                        name: "l",
                        group: null
                    }), l.canvas.collage.specificCollage.bolitas.circleNames.push({
                        object: u,
                        name: "m",
                        group: null
                    }), l.canvas.collage.specificCollage.bolitas.circleNames.push({
                        object: h,
                        name: "n",
                        group: null
                    }), l.canvas.collage.specificCollage.bolitas.circleNames.push({
                        object: C,
                        name: "o",
                        group: null
                    })
                }
            },
            crearClips: function() {
                var e = l.canvas.collageScale;
                c.collage.clips.corazonEnMedio(e), c.collage.clips.bolitas(e), angular.forEach(l.canvas.collage.circleNames, function(a, t) {
                    var o, n, r = posicionesDispositivos[l.selected.dispositivoSeleccionado];
                    t % 2 == 0 && (o = 0, n = r.templateHeight * e / 3 * t / 2), t % 2 == 1 && (o = r.templateWidth * e / 2, n = r.templateHeight * e / 3 * (t - 1) / 2);
                    var s = o + l.canvas.fabricCanvas.width,
                        i = n + l.canvas.fabricCanvas.height,
                        g = r.templateWidth / 8;
                    a.object = new fabric.Circle({
                        scaleX: e,
                        scaleY: e,
                        left: s,
                        top: i,
                        radius: g,
                        originX: "center",
                        originY: "center",
                        hasControls: !1,
                        hasBorders: !1,
                        lockMovementX: !0,
                        lockMovementY: !0
                    }), a.object.tipo = "clip", a.object.nombre = a.name, a.object.on("selected", function() {
                        console.log("group selectdd"), l.canvas.collage.clipSelected = this.nombre, c.fabricCanvasVistaEditorCollage()
                    })
                })
            },
            posicionarTodosLosElementosYCirculos: function() {
                angular.forEach(l.canvas.collage.circleNames, function(e, a) {
                    if (null != e.object) {
                        var t = new fabric.Group;
                        angular.forEach(l.canvas.collage.arrayOfAllElements, function(a, o) {
                            if (a.clip == e.name) {
                                var l = fabric.util.object.clone(a.fabricObj);
                                t.addWithUpdate(l)
                            }
                        });
                        var o = fabric.util.object.clone(e.object);
                        console.log("mask:", o), t.clipTo = function(e) {
                            o.opacity = 1, o.globalCompositeOperation = "source-atop", o.fill = l.globalProperties.colorFondo, o.render(e)
                        }, l.canvas.fabricCanvas.remove(e.group), e.group = t, e.group.selectable = !1
                    }
                })
            }
        },
        setBackScale: function(e) {
            l.canvas.backScale = e

        },
        setImages: function(a) {
            var t, o, n, r = e.defer(),
                s = posicionesDispositivos[l.selected.dispositivoSeleccionado],
                i = s.templateStartTop,
                g = s.templateStartLeft;
            return console.log("backScale", n), fabric.Image.fromURL("/images/cases/" + posicionesDispositivos[l.selected.dispositivoSeleccionado].templateI, function(e) {
                n = a / e.height, l.canvas.collageScale = n, l.canvas.template = e, t = l.canvas.fabricCanvas.width / 2 - (g * n + s.templateWidth * n / 2 - e.width * n / 2), o = l.canvas.fabricCanvas.height / 2 - (i * n + s.templateHeight * n / 2 - e.height * n / 2), 
                console.log("template: ", t, o), l.canvas.template.set({
                    left: t,
                    top: o,
                    originX: "center",
                    originY: "center",
                    scaleX: n,
                    scaleY: n
                }), l.canvas.templateBackground = new fabric.Rect({
                    left: l.canvas.fabricCanvas.width / 2,
                    top: l.canvas.fabricCanvas.height / 2,
                    width: s.templateWidth,
                    height: s.templateHeight,
                    scaleX: n,
                    scaleY: n,
                    originX: "center",
                    originY: "center",
                    fill: "#FFFFFF"
                }), c.collage.crearClips(), fabric.Image.fromURL("/images/cases/" + posicionesDispositivos[l.selected.dispositivoSeleccionado].backi, function(e) {
                    console.log("back: ", t, o), e.scale(n), e.set({
                        selectable: !1,
                        left: t,
                        top: o,
                        originX: "center",
                        originY: "center"
                    }), l.canvas.back = e, l.canvas.back.filters.push(new fabric.Image.filters.Tint({
                        color: l.globalProperties.colorFondo,
                        opacity: 1
                    })), l.canvas.back.applyFilters(function() {
                        fabric.Image.fromURL("/images/cases/" + posicionesDispositivos[l.selected.dispositivoSeleccionado].coveri, function(e) {
                            console.log("cover: ", t, o), l.canvas.cover = e, l.canvas.cover.set({
                                left: t,
                                top: o,
                                originX: "center",
                                originY: "center",
                                scaleX: n,
                                scaleY: n
                            }), r.resolve()
                        })
                    })
                })
            }), r.promise
        },
        zoomIt: function(e, a, t) {
            l.canvas.template.set({
                left: l.canvas.template.left * e,
                top: l.canvas.template.top * e,
                originX: "center",
                originY: "center",
                scaleX: t,
                scaleY: t
            }), l.canvas.templateBackground.set({
                left: l.canvas.templateBackground.left * e,
                top: l.canvas.templateBackground.top * e,
                originX: "center",
                originY: "center",
                scaleX: t,
                scaleY: t
            }), l.canvas.back.set({
                left: l.canvas.back.left * e,
                top: l.canvas.back.top * e,
                originX: "center",
                originY: "center",
                scaleX: t,
                scaleY: t
            }), l.canvas.cover.set({
                left: l.canvas.cover.left * e,
                top: l.canvas.cover.top * e,
                originX: "center",
                originY: "center",
                scaleX: t,
                scaleY: t
            }), angular.forEach(l.canvas.objetos, function(t, o) {
                console.log(a), t.scaleX *= e, t.scaleY *= e, t.left *= e, t.top *= e, t.setCoords()
            }), angular.forEach(l.canvas.collage.circleNames, function(a, t) {
                null !== a.object && (a.object.scaleX *= e, a.object.scaleY *= e, a.object.left *= e, a.object.top *= e, a.object.setCoords())
            }), null === l.canvas.collage.collage, l.canvas.fabricCanvas.calcOffset();
            var o = posicionesDispositivos[l.selected.dispositivoSeleccionado],
                n = o.templateStartTop,
                c = o.templateStartLeft,
                r = l.canvas.fabricCanvas.width / 2 - l.canvas.template.width / 2 + (c + o.templateWidth / 2),
                s = l.canvas.fabricCanvas.height / 2 - l.canvas.fabricCanvas.height / 2 + (n + o.templateHeight / 2),
                i = r - l.canvas.template.left;
            s - l.canvas.template.top;
            l.canvas.template.left += i, l.canvas.templateBackground.left += i, l.canvas.back.left += i, l.canvas.cover.left += i, angular.forEach(l.canvas.objetos, function(e, t) {
                console.log(a), e.left += i, e.setCoords()
            }), angular.forEach(l.canvas.collage.circleNames, function(e, a) {
                null !== e.object && (e.object.left += i, e.object.setCoords())
            }), null === l.canvas.collage.collage && angular.forEach(l.canvas.collage.specificCollage.corazonEnMedio.circleNames, function(e, a) {
                null !== e.object && (e.object.left += i, e.object.setCoords())
            })
        },
        setGlobalProperty: function(e, a) {
            l.globalProperties[e] = a, t.$broadcast("globalPropertyChanged", {
                property: e,
                value: a
            })
        },
        setSelected: function(e, a) {
            l.selected[e] = a
        },
        utils: {
            rgbToHex: function(e, a, t) {
                if (e > 255 || a > 255 | t > 255) throw "Invalid color component";
                return (e << 16 | a << 8 | t).toString(16)
            }
        },
        getService: function() {
            return l
        },
        setInitialWidthCanvas: function(e) {
            l.canvas.initialWidth = e
        },
        setWidthCanvas: function(e) {
            l.canvas.width = e
        },
        setHeightCanvas: function(e) {
            l.canvas.height = e
        },
        setVistaPreviaV: function(e) {
            l.mode.vistaPreviaV = e
        },
        setSized: function(e) {
            l.canvas.sized = e
        },
        addObjeto: function(e) {
            l.canvas.objetos.push(e)
        },
        removeObjeto: function(e) {
            if (null !== l.canvas.collage.collage) return void c.collage.removeObjetoCollage(e);
            var a;
            l.canvas.fabricCanvas.remove(l.selected.lastSelectedObjects.last), l.selected.lastSelectedObjects.last = null, a = l.canvas.fabricCanvas.getObjects(), l.canvas.objetos = [], angular.forEach(a, function(e, a) {
                void 0 != e.nombre && l.canvas.objetos.push(e)
            }), l.canvas.fabricCanvas.renderAll()
        },
        increaseObjectCounter: function() {
            l.canvas.objCounter++
        },
        selectObject: function(e) {
            l.selected.lastSelectedObjects.first = l.selected.lastSelectedObjects.last, l.selected.lastSelectedObjects.last = e
        },
        bordearObjeto: function(e) {
            var a;
            l.canvas.fabricCanvas.remove(l.borde.bordearObjeto.left, l.borde.bordearObjeto.bottom, l.borde.bordearObjeto.top, l.borde.bordearObjeto.right), a = e.getBoundingRect(), l.borde.bordearObjeto.left = new fabric.Line([a.left, a.top, a.left, a.top + a.height], {
                strokeWidth: 1,
                stroke: "black",
                selectable: !1
            }), l.borde.bordearObjeto.bottom = new fabric.Line([a.left, a.top + a.height, a.left + a.width, a.top + a.height], {
                strokeWidth: 1,
                stroke: "black",
                selectable: !1
            }), l.borde.bordearObjeto.top = new fabric.Line([a.left, a.top, a.left + a.width, a.top], {
                strokeWidth: 1,
                stroke: "stroke",
                selectable: !1
            }), l.borde.bordearObjeto.right = new fabric.Line([a.left + a.width, a.top, a.left + a.width, a.top + a.height], {
                strokeWidth: 1,
                stroke: "stroke",
                selectable: !1
            }), l.canvas.fabricCanvas.add(l.borde.bordearObjeto.left, l.borde.bordearObjeto.bottom, l.borde.bordearObjeto.top, l.borde.bordearObjeto.right), l.canvas.fabricCanvas.renderAll()
        },
        quitarBorde: function() {
            l.canvas.fabricCanvas.remove(l.borde.bordearObjeto.left, l.borde.bordearObjeto.bottom, l.borde.bordearObjeto.top, l.borde.bordearObjeto.right), l.canvas.fabricCanvas.renderAll()
        },
        escalarObjetoTL: function(e) {
            var a, t, o, n, c, r, s, i, g, p, d;
            a = l.selected.lastSelectedObjects.last.left - l.selected.lastSelectedObjects.last.width * l.selected.lastSelectedObjects.last.scaleX / 2, t = l.selected.lastSelectedObjects.last.width * l.selected.lastSelectedObjects.last.scaleX, o = l.selected.lastSelectedObjects.last.scaleX, r = l.selected.lastSelectedObjects.last.scaleX * l.selected.lastSelectedObjects.last.width, s = l.selected.lastSelectedObjects.last.scaleY * l.selected.lastSelectedObjects.last.height, n = e.e.offsetX - a, fabric.isTouchSupported && (n = e.e.touches[0].clientX - a, console.log(n)), c = o * (t - n) / t, i = c * l.selected.lastSelectedObjects.last.width, g = c * l.selected.lastSelectedObjects.last.height, d = r - i / 2 - r / 2, p = s - g / 2 - s / 2, l.selected.lastSelectedObjects.last.scaleX = c, l.selected.lastSelectedObjects.last.scaleY = c, l.selected.lastSelectedObjects.last.left += d, l.selected.lastSelectedObjects.last.top += p, l.canvas.fabricCanvas.renderAll()
        },
        escalarObjetoBL: function(e) {
            var a, t, o, n, c, r, s, i, g, p, d;
            a = l.selected.lastSelectedObjects.last.left - l.selected.lastSelectedObjects.last.width * l.selected.lastSelectedObjects.last.scaleX / 2, t = l.selected.lastSelectedObjects.last.width * l.selected.lastSelectedObjects.last.scaleX, o = l.selected.lastSelectedObjects.last.scaleX, r = l.selected.lastSelectedObjects.last.scaleX * l.selected.lastSelectedObjects.last.width, s = l.selected.lastSelectedObjects.last.scaleY * l.selected.lastSelectedObjects.last.height, n = e.e.offsetX - a, fabric.isTouchSupported && (n = e.e.touches[0].clientX - a, console.log(n)), c = o * (t - n) / t, i = c * l.selected.lastSelectedObjects.last.width, g = c * l.selected.lastSelectedObjects.last.height, d = r - i / 2 - r / 2, p = g / 2, l.selected.lastSelectedObjects.last.scaleX = c, l.selected.lastSelectedObjects.last.scaleY = c, l.selected.lastSelectedObjects.last.left += d, l.selected.lastSelectedObjects.last.top -= s / 2 - p, l.canvas.fabricCanvas.renderAll()
        },
        escalarObjetoTR: function(e) {
            var a, t, o, n, c, r, s, i, g, p, d;
            a = l.selected.lastSelectedObjects.last.left + l.selected.lastSelectedObjects.last.width * l.selected.lastSelectedObjects.last.scaleX / 2, t = l.selected.lastSelectedObjects.last.width * l.selected.lastSelectedObjects.last.scaleX, o = l.selected.lastSelectedObjects.last.scaleX, r = l.selected.lastSelectedObjects.last.scaleX * l.selected.lastSelectedObjects.last.width, s = l.selected.lastSelectedObjects.last.scaleY * l.selected.lastSelectedObjects.last.height, n = a - e.e.offsetX, fabric.isTouchSupported && (n = a - e.e.touches[0].clientX, console.log(n)), c = o * (t - n) / t, i = c * l.selected.lastSelectedObjects.last.width, g = c * l.selected.lastSelectedObjects.last.height, d = i / 2, p = s - g / 2 - s / 2, l.selected.lastSelectedObjects.last.scaleX = c, l.selected.lastSelectedObjects.last.scaleY = c, l.selected.lastSelectedObjects.last.left -= r / 2 - d, l.selected.lastSelectedObjects.last.top += p, l.canvas.fabricCanvas.renderAll()
        },
        escalarObjetoBR: function(e) {
            var a, t, o, n, c, r, s, i, g, p, d;
                a = l.selected.lastSelectedObjects.last.left + l.selected.lastSelectedObjects.last.width * l.selected.lastSelectedObjects.last.scaleX / 2,
                t = l.selected.lastSelectedObjects.last.width * l.selected.lastSelectedObjects.last.scaleX, 
                o = l.selected.lastSelectedObjects.last.scaleX, 
                r = l.selected.lastSelectedObjects.last.scaleX * l.selected.lastSelectedObjects.last.width, 
                s = l.selected.lastSelectedObjects.last.scaleY * l.selected.lastSelectedObjects.last.height, 
                n = a - e.e.offsetX, fabric.isTouchSupported && (n = a - e.e.touches[0].clientX, console.log(n)),
                c = o * (t - n) / t, 
                i = c * l.selected.lastSelectedObjects.last.width, 
                g = c * l.selected.lastSelectedObjects.last.height, 
                d = i / 2, 
                p = g / 2, l.selected.lastSelectedObjects.last.scaleX = c, l.selected.lastSelectedObjects.last.scaleY = c, l.selected.lastSelectedObjects.last.left -= r / 2 - d, l.selected.lastSelectedObjects.last.top -= s / 2 - p, l.canvas.fabricCanvas.renderAll()
        },
        girarObjeto: function(e) {
            var a, t, o, n, c, r, s, i;
            a = l.controles.girandoCoors.x, t = l.controles.girandoCoors.y, fabric.isTouchSupported && (e.e.offsetX = e.e.touches[0].clientX, e.e.offsetY = e.e.touches[0].clientY), e.e.offsetX > a && e.e.offsetY < t ? (o = e.e.offsetX - a, n = t - e.e.offsetY) : e.e.offsetX < a && e.e.offsetY < t ? (o = e.e.offsetX - a, n = t - e.e.offsetY) : e.e.offsetX < a && e.e.offsetY > t ? (o = e.e.offsetX - a, n = t - e.e.offsetY) : e.e.offsetX > a && e.e.offsetY > t && (o = e.e.offsetX - a, n = t - e.e.offsetY), c = 0, r = 10, s = Math.atan2(n, o) - Math.atan2(r, c), s = 360 - fabric.util.radiansToDegrees(s), i = l.controles.girandoAngle, l.selected.lastSelectedObjects.last.set({
                angle: s + i
            }), l.canvas.fabricCanvas.renderAll()
        },
        esconderControles: function() {
            l.controles.mostrandoControles = !1, c.quitarBorde(), null != l.controles.edit.obj && (l.canvas.fabricCanvas.remove(l.controles.edit.obj), l.controles.edit.obj = null), null != l.controles.del.obj && (l.canvas.fabricCanvas.remove(l.controles.del.obj), l.controles.del.obj = null), null != l.controles.tl.obj && (l.canvas.fabricCanvas.remove(l.controles.tl.obj), l.controles.tl.obj = null), null != l.controles.bl.obj && (l.canvas.fabricCanvas.remove(l.controles.bl.obj), l.controles.bl.obj = null), null != l.controles.tr.obj && (l.canvas.fabricCanvas.remove(l.controles.tr.obj), l.controles.tr.obj = null), null != l.controles.br.obj && (l.canvas.fabricCanvas.remove(l.controles.br.obj), l.controles.br.obj = null), null != l.controles.tm.obj && (l.canvas.fabricCanvas.remove(l.controles.tm.obj), l.controles.tm.obj = null)
        },
        editarTexto: function(e) {
            c.selectObject(e), c.setSelected("textoSelected", e), c.setGlobalProperty("textoContenido", l.selected.textoSelected.text), l.mode.vistaPreviaV && c.fabricCanvasVistaEditor(), a.abrirMenu("agregarTextoMenuModal")
        },
        generarControles: function(e) {
            var a;
            
            l.canvas.fabricCanvas.calcOffset(), a = e.getBoundingRect(), l.canvas.fabricCanvas.remove(l.controles.del.obj), l.controles.edit.y = a.top + 30, l.controles.edit.x = a.left + a.width + 30, l.controles.del.y = a.top, l.controles.del.x = a.left + a.width + 30, l.controles.tl.y = a.top, l.controles.tl.x = a.left, l.controles.tr.y = a.top, l.controles.tr.x = a.left + a.width, l.controles.bl.y = a.top + a.height, l.controles.bl.x = a.left, l.controles.br.y = a.top + a.height, l.controles.br.x = a.left + a.width, l.controles.tm.y = a.top - 20, l.controles.tm.x = a.left + a.width / 2, fabric.Image.fromURL("/images/icons/close.png", function(e) {
                l.controles.del.obj = e, l.controles.del.obj.set({
                    top: l.controles.tr.y,
                    left: l.controles.tr.x,
                    originX: "center",
                    originY: "center",
                    selectable: !1,
                    hasControls: !1,
                    hasBorders: !1
                }), l.controles.del.obj.controlDelete = !0, l.canvas.fabricCanvas.add(l.controles.del.obj), l.canvas.fabricCanvas.renderAll()
            }), l.canvas.fabricCanvas.remove(l.controles.tl.obj), fabric.Image.fromURL("/images/icons/resize.png", function(e) {
                l.controles.bl.obj = e, l.controles.bl.obj.set({
                    top: l.controles.bl.y,
                    left: l.controles.bl.x,
                    originX: "center",
                    originY: "center",
                    selectable: !1,
                    hasControls: !1,
                    hasBorders: !1
                }), l.controles.bl.obj.controlBL = !0, l.canvas.fabricCanvas.add(l.controles.bl.obj), l.canvas.fabricCanvas.renderAll()
            }), l.canvas.fabricCanvas.remove(l.controles.tr.obj), fabric.Image.fromURL("/images/icons/mirror.png", function(e) {
                l.controles.br.obj = e, l.controles.br.obj.set({
                    top: l.controles.br.y,
                    left: l.controles.br.x,
                    originX: "center",
                    originY: "center",
                    selectable: !1,
                    hasControls: !1,
                    hasBorders: !1
                }), l.controles.br.obj.controlBR = !0, l.canvas.fabricCanvas.add(l.controles.br.obj), l.canvas.fabricCanvas.renderAll()
            }), l.canvas.fabricCanvas.remove(l.controles.tm.obj), fabric.Image.fromURL("/images/icons/rotate.png", function(e) {
                l.controles.tm.obj = e, l.controles.tm.obj.set({
                    top: l.controles.tl.y,
                    left: l.controles.tl.x,
                    originX: "center",
                    originY: "center",
                    selectable: !1,
                    hasControls: !1,
                    hasBorders: !1
                }), l.controles.tm.obj.controlTM = !0, l.canvas.fabricCanvas.add(l.controles.tm.obj), l.canvas.fabricCanvas.renderAll()
            }), l.controles.mostrandoControles = !0, c.bordearObjeto(e)
        },
        fabricCanvasFondoColorInit: function() {
            fabric.Image.fromURL("/images/colors.png", function(e) {
                e.set({
                    selectable: !1
                }), l.canvas.fabricCanvasFondoColor.add(e), l.canvas.fabricCanvasFondoColor.renderAll()
            })
        },
        fabricCanvasFondoColorModalInit: function() {
            fabric.Image.fromURL("/images/colors.png", function(e) {
                e.set({
                    selectable: !1
                }), l.canvas.fabricCanvasFondoColorModal.add(e), l.canvas.fabricCanvasFondoColorModal.renderAll()
            })
        },
        fabricCanvasTextoColorInit: function() {
            fabric.Image.fromURL("/images/colors.png", function(e) {
                e.set({
                    selectable: !1
                }), l.canvas.fabricCanvasTextoColor.add(e), l.canvas.fabricCanvasTextoColor.renderAll()
            })
        },
        fabricCanvasTextoColorModalInit: function() {
            console.log("se ha cargado la imagen texto color modal"), console.log("creamos el rectangulo"), fabric.Image.fromURL("/images/colors.png", function(e) {
                e.set({
                    selectable: !1
                }), l.canvas.fabricCanvasTextoColorModal.add(e), l.canvas.fabricCanvasTextoColorModal.renderAll()
            })
        },
        objetos: {
            modificarCompositeOperation: function(e, a) {
                e.globalCompositeOperation = a
            },
            agregarObjeto: function(e) {
                e.globalCompositeOperation = "source-over", l.canvas.fabricCanvas.add(e)
            },
            agregarObjetoVistaPrevia: function(e) {
                e.globalCompositeOperation = "source-atop", l.canvas.fabricCanvas.add(e)
            },
            agregarObjetoVistaPreviaCollage: function(e) {
                null != e && (angular.forEach(e._objects, function(e, a) {
                    e.globalCompositeOperation = "source-atop", e.selectable = !1
                }), l.canvas.fabricCanvas.add(e))
            },
            agregarImagen: function(e) {
                l.canvas.backScale;
                c.fabricCanvasVistaEditor(), fabric.Image.fromURL(e, function(e) {
                    e.set({
                        selection: !1,
                        originX: "center",
                        originY: "center",
                        top: height / 2,
                        left: width / 2,
                        hasControls: !1,
                        hasBorders: !1
                    }), c.objetos.util.scaleAndPositionToBack(e), e.nombre = l.canvas.objCounter++, e.on("selected", function() {
                        c.selectObject(l.canvas.fabricCanvas.getActiveObject()), l.mode.vistaPreviaV && c.fabricCanvasVistaEditor()
                    }), e.on("moving", function() {
                        c.quitarBorde(), l.controles.escalando || c.esconderControles(), l.mode.vistaPreviaV && c.fabricCanvasVistaEditor()
                    }), l.canvas.objetos.push(e), l.canvas.fabricCanvas.add(e), l.canvas.fabricCanvas.renderAll(), null !== l.canvas.collage.collage && l.canvas.collage.arrayOfAllElements.push({
                        clip: l.canvas.collage.clipSelected,
                        fabricObj: e
                    })
                })
            },
            agregarTexto: function(e, t, n) {
                var r = new fabric.Text(e, {
                    selection: !1,
                    hasControls: !1,
                    hasBorders: !1,
                    fontFamily: t,
                    fill: n,
                    left: width / 2,
                    top: height / 3,
                    originX: "center",
                    originY: "center"
                });
                return c.objetos.util.scaleAndPositionToBack(r), r.objetoTipo = "texto", r.nombre = l.canvas.objCounter++, r.on("selected", function() {
                    c.selectObject(l.canvas.fabricCanvas.getActiveObject()), c.setSelected("textoSelected", l.canvas.fabricCanvas.getActiveObject()), c.setGlobalProperty("textoContenido", l.selected.textoSelected.text), l.mode.vistaPreviaV && c.fabricCanvasVistaEditor(), o.innerWidth <= 768, o.innerWidth > 768 && a.abrirMenu("agregarTextoMenu")
                }), r.on("moving", function() {
                    c.quitarBorde(), l.controles.escalando || c.esconderControles(), l.mode.vistaPreviaV && c.fabricCanvasVistaEditor()
                }), l.canvas.fabricCanvas.add(r), l.canvas.objetos.push(r), l.canvas.fabricCanvas.renderAll(), null !== l.canvas.collage.collage && l.canvas.collage.arrayOfAllElements.push({
                    clip: l.canvas.collage.clipSelected,
                    fabricObj: r
                }), r
            },
            util: {
                scaleAndPositionToBack: function(e) {
                    var a = posicionesDispositivos[l.selected.dispositivoSeleccionado],
                        t = a.templateWidth * l.canvas.template.scaleX,
                        o = a.templateHeight * l.canvas.template.scaleY,
                        n = a.templateStartTop * l.canvas.template.scaleX,
                        c = a.templateStartLeft * l.canvas.template.scaleY,
                        r = l.canvas.template.width * l.canvas.template.scaleX,
                        s = l.canvas.template.height * l.canvas.template.scaleY;
                    console.log(l.canvas.template.width, l.canvas.template.height);
                    var i;
                    i = t / e.width, e.height > e.width && (i = o / e.height), e.scale(i), e.left = l.canvas.template.left - r / 2 + c + t / 2, e.top = l.canvas.template.top - s / 2 + n + o / 2
                }
            }
        },
        fabricCanvasVistaPreviaCollage: function() {
            var a = e.defer();
            return l.mode.vistaPreviaV = !0, l.selected.lastSelectedObjects.last = null, c.esconderControles(), l.canvas.fabricCanvas.overlayImage = null, l.canvas.fabricCanvas.backgroundImage = null, l.canvas.fabricCanvas.clear(), l.canvas.fabricCanvas.add(l.canvas.back), c.collage.posicionarTodosLosElementosYCirculos(), angular.forEach(l.canvas.collage.circleNames, function(e, a) {
                null !== e.object && (c.objetos.agregarObjetoVistaPreviaCollage(e.group), e.object.opacity = 0, l.canvas.fabricCanvas.add(e.object))
            }), l.canvas.fabricCanvas.setOverlayImage(l.canvas.cover, l.canvas.fabricCanvas.renderAll.bind(l.canvas.fabricCanvas)), a.resolve(), a.promise
        },
        fabricCanvasVistaPrevia: function() {
            if (null !== l.canvas.collage.collage) {
                var a = e.defer();
                return c.fabricCanvasVistaPreviaCollage(), a.resolve(), a.promise
            }
            var a = e.defer();
            return l.mode.vistaPreviaV = !0, l.selected.lastSelectedObjects.last = null, c.esconderControles(), l.canvas.fabricCanvas.overlayImage = null, l.canvas.fabricCanvas.backgroundImage = null, l.canvas.fabricCanvas.clear(), l.canvas.fabricCanvas.add(l.canvas.back), angular.forEach(l.canvas.objetos, function(e, a) {
                c.objetos.agregarObjetoVistaPrevia(e)
            }), l.canvas.fabricCanvas.setOverlayImage(l.canvas.cover, l.canvas.fabricCanvas.renderAll.bind(l.canvas.fabricCanvas)), a.resolve(), a.promise
        },
        fabricCanvasVistaEditorCollage: function(e) {
            l.mode.vistaPreviaV = !1, l.canvas.fabricCanvas.setBackgroundImage(l.canvas.templateBackground, l.canvas.fabricCanvas.renderAll.bind(l.canvas.fabricCanvas)), l.canvas.fabricCanvas.setOverlayImage(l.canvas.template, l.canvas.fabricCanvas.renderAll.bind(l.canvas.fabricCanvas)), l.canvas.fabricCanvas.controlsAboveOverlay = !0, c.collage.posicionarTodosLosElementosYCirculos(), angular.forEach(l.canvas.collage.circleNames, function(e, a) {
                null !== e.group && (angular.forEach(e.group._objects, function(e, a) {
                    e.globalCompositeOperation = "source-over"
                }), l.canvas.fabricCanvas.add(e.group))
            }), l.canvas.fabricCanvas.add(new fabric.Rect({
                width: l.canvas.fabricCanvas.width,
                height: l.canvas.fabricCanvas.height,
                fill: "#000000",
                opacity: .5,
                selectable: !1
            })), angular.forEach(l.canvas.collage.circleNames, function(e, a) {
                e.name == l.canvas.collage.clipSelected && (e.object.opacity = 1, e.object.fill = l.globalProperties.colorFondo, l.canvas.fabricCanvas.add(e.object), console.log("hemos encontrado el objeto"))
            }), angular.forEach(l.canvas.collage.arrayOfAllElements, function(e, a) {
                e.clip == l.canvas.collage.clipSelected && l.canvas.fabricCanvas.add(e.fabricObj)
            }), l.canvas.fabricCanvas.renderAll()
        },
        fabricCanvasVistaEditor: function() {
            return null !== l.canvas.collage.collage ? void c.fabricCanvasVistaEditorCollage() : (l.mode.vistaPreviaV = !1, l.canvas.fabricCanvas.setBackgroundImage(l.canvas.templateBackground, l.canvas.fabricCanvas.renderAll.bind(l.canvas.fabricCanvas)), l.canvas.fabricCanvas.setOverlayImage(l.canvas.template, l.canvas.fabricCanvas.renderAll.bind(l.canvas.fabricCanvas)), l.canvas.fabricCanvas.controlsAboveOverlay = !0, angular.forEach(l.canvas.objetos, function(e, a) {
                c.objetos.modificarCompositeOperation(e, "source-over")
            }), void l.canvas.fabricCanvas.renderAll())
        },
        fabricCanvasVistaImpresionCollage: function() {
            var e = l.canvas.template.width,
                a = l.canvas.template.height,
                t = l.canvas.template.width * l.canvas.template.scaleX,
                o = l.canvas.template.height * l.canvas.template.scaleY,
                n = e / t,
                c = a / o,
                r = (posicionesDispositivos[l.selected.dispositivoSeleccionado].templateWidth, posicionesDispositivos[l.selected.dispositivoSeleccionado].templateHeight, posicionesDispositivos[l.selected.dispositivoSeleccionado].templateStartLeft, posicionesDispositivos[l.selected.dispositivoSeleccionado].templateStartTop, l.canvas.templateBackground.clone()),
                s = (fabric.util.object.clone(l.canvas.template), new fabric.Group, new fabric.StaticCanvas("cFinal"));
            s.setWidth(r.width + 10), s.setHeight(r.height + 10), s.isGrabMode = !1;
            var i = new fabric.Group;
            r.nombre = "templateBackground", r.borderColor = "red", r.originX = "center", r.originY = "center", i.originX = "center", i.originY = "center", i.addWithUpdate(r), s.add(i);
            var g = [],
                p = (i.top, i.left, s.height / 2),
                d = s.width / 2;
            i.top *= c, i.left *= n, i.scaleX = n, i.scaleY = c;
            var v = -p + i.top,
                b = -d + i.left;
            i.top -= v, i.left -= b, angular.forEach(l.canvas.collage.circleNames, function(e, a) {
                if (null !== e.object) {
                    var t = new fabric.Group;
                    angular.forEach(l.canvas.collage.arrayOfAllElements, function(a, o) {
                        if (a.clip == e.name) {
                            var l = fabric.util.object.clone(a.fabricObj);
                            l.top *= c, l.left *= n, l.scaleX *= n, l.scaleY *= c, l.top -= v, l.left -= b, t.addWithUpdate(l), console.log("circlemask;", l.originX)
                        }
                    });
                    var o = fabric.util.object.clone(e.object);
                    o.top *= c, o.left *= n, o.scaleX *= n, o.scaleY *= c, o.top -= v, o.left -= b, t.clipTo = function(e) {
                        o.opacity = 1, o.globalCompositeOperation = "source-atop", o.fill = l.globalProperties.colorFondo, o.render(e)
                    }, l.canvas.fabricCanvas.remove(e.group), e.group = t, e.group.selectable = !1
                }
            }), angular.forEach(l.canvas.collage.circleNames, function(e, a) {
                e.group.selectable = !0, g.push(e.group)
            }), angular.forEach(g, function(e, a) {
                s.add(e)
            }), s.renderAll();
            var f = s.toDataURL();
            return s.setHeight(0), s.setWidth(0), f
        },
        fabricCanvasVistaImpresion: function() {
            function e(e) {
                var a = e / p.getWidth();
                height = a * p.getHeight(), p.setDimensions({
                    width: e,
                    height: height
                }), p.calcOffset();
                var t = p.getObjects();
                for (var o in t) {
                    var l = t[o].scaleX,
                        n = t[o].scaleY,
                        c = t[o].left,
                        r = t[o].top;
                    t[o].scaleX = l * a, t[o].scaleY = n * a, t[o].left = c * a, t[o].top = r * a, t[o].setCoords()
                }
                p.renderAll()
            }
            if (null !== l.canvas.collage.collage) return c.fabricCanvasVistaImpresionCollage();
            var a = l.canvas.template.width,
                t = l.canvas.template.height,
                o = l.canvas.template.width * l.canvas.template.scaleX,
                n = l.canvas.template.height * l.canvas.template.scaleY,
                r = a / o,
                s = t / n,
                i = (posicionesDispositivos[l.selected.dispositivoSeleccionado].templateWidth, posicionesDispositivos[l.selected.dispositivoSeleccionado].templateHeight, posicionesDispositivos[l.selected.dispositivoSeleccionado].templateStartLeft, posicionesDispositivos[l.selected.dispositivoSeleccionado].templateStartTop, l.canvas.templateBackground.clone()),
                g = (fabric.util.object.clone(l.canvas.template), []),
                p = new fabric.StaticCanvas("cFinal");
            angular.forEach(l.canvas.objetos, function(e, a) {
                g.push(fabric.util.object.clone(e))
            });
            var d = new fabric.Group;
            i.nombre = "templateBackground", i.borderColor = "red", d.addWithUpdate(i), angular.forEach(g, function(e, a) {
                d.addWithUpdate(e)
            }), d.scaleX = r, d.scaleY = s, p.hasControls = !1, p.hasBorders = !1;
            var v = null,
                b = null;
            p.calcOffset(), d.originX = "left", d.originY = "top", angular.forEach(d._objects, function(e, a) {
                console.log("elementoNOMBRE: ", e.nombre), "templateBackground" == e.nombre && (v = e.left * e.scaleX + e.width * e.scaleX / 2, b = e.top * e.scaleY + e.height * e.scaleY / 2, console.log("origins: ", e.originX, e.originY))
            }), console.log("XPTBDG", v), console.log("YPTBDG", b), angular.forEach(d._objects, function(e, a) {
                e.globalCompositeOperation = "source-over"
            }), d.top = 2, d.left = 2, d.borderColor = "red", p.add(d), p.setHeight(d.height * d.scaleY + 3), p.setWidth(d.width * d.scaleX + 3), p.renderAll();
            p.getWidth();
            e(1e3);
            var f = p.toDataURL({
                format: "png",
                quality: 1
            });
            return p.setHeight(0), p.setWidth(0), f
        },
        events: {
            fabricCanvas: {
                fondoColor: {
                    onMouseMove: function(e) {
                        var a, t, o;
                        l.globalProperties.eyeDropping && (a = e.e.offsetX, t = e.e.offsetY, o = l.canvas.fabricCanvas.getContext().getImageData(a, t, 1, 1), hex = "#" + ("000000" + c.utils.rgbToHex(o.data[0], o.data[1], o.data[2])).slice(-6), c.setGlobalProperty("eyeDroppingFondoColor", hex))
                    },
                    onMouseDown: function(e) {
                        var a, t, o;
                        l.globalProperties.eyeDropping && (a = e.e.offsetX, t = e.e.offsetY, o = l.canvas.fabricCanvas.getContext().getImageData(a, t, 1, 1), hex = "#" + ("000000" + c.utils.rgbToHex(o.data[0], o.data[1], o.data[2])).slice(-6), c.setGlobalProperty("colorFondo", hex), l.canvas.back.filters.push(new fabric.Image.filters.Tint({
                            color: l.globalProperties.colorFondo,
                            opacity: 1
                        })), l.canvas.back.applyFilters(l.canvas.fabricCanvas.renderAll.bind(l.canvas.fabricCanvas)), l.canvas.templateBackground.setColor(l.globalProperties.colorFondo), c.setGlobalProperty("eyeDropping", !1), l.canvas.fabricCanvas.defaultCursor = "default")
                    }
                },
                canvas: {
                    onMouseMove: function(e) {
                        l.controles.girando && (console.log("girando"), c.girarObjeto(e)), l.controles.escalando && (console.log("escalando", e), c.escalarObjetoTL(e)), l.controles.escalandoRight && (console.log("escalando"), c.escalarObjetoTR(e)), l.controles.escalandoBL && (console.log("escalando"), c.escalarObjetoBL(e)), l.controles.escalandoBR && (console.log("escalando"), c.escalarObjetoBR(e))
                    },
                    onMouseDown: function(e) {
                        e.hasOwnProperty("target") && void 0 != e.target && (e.target.controlTl ? l.controles.escalando || l.controles.escalandoRight || (console.log("va a escalar", e), l.controles.escalando = !0, c.esconderControles(), c.quitarBorde()) : e.target.controlBL ? l.controles.escalando || l.controles.escalandoRight || (l.controles.escalandoBL = !0, c.esconderControles(), c.quitarBorde()) : e.target.controlTR ? l.controles.escalandoRight || l.controles.escalando || (l.controles.escalandoRight = !0, c.esconderControles(), c.quitarBorde()) : e.target.controlBR ? l.controles.escalandoRight || l.controles.escalando || (l.controles.escalandoBR = !0, c.esconderControles(), c.quitarBorde()) : e.target.controlTM && (l.controles.girando = !0, l.controles.girandoCoors.x = l.selected.lastSelectedObjects.last.left, l.controles.girandoCoors.y = l.selected.lastSelectedObjects.last.top, l.controles.girandoAngle = l.selected.lastSelectedObjects.last.angle, c.esconderControles(), c.quitarBorde()))
                    },
                    onMouseOver: function(e) {
                        l.controles.mostrandoControles || l.controles.girando || l.controles.escalando || l.controles.escalandoRight || (void 0 != e.target.nombre ? l.borde.ultimoObjetoOvered ? l.borde.ultimoObjetoOvered.nombre != e.target.nombre && (l.borde.ultimoObjetoOvered = e.target, c.bordearObjeto(e.target)) : (l.borde.ultimoObjetoOvered = e.target, c.bordearObjeto(e.target)) : (c.quitarBorde(), l.borde.ultimoObjetoOvered = null))
                    },
                    onMouseUp: function(e) {
                        return l.controles.girando = !1, l.controles.escalando = !1, l.controles.escalandoRight = !1, l.controles.escalandoBL = !1, l.controles.escalandoBR = !1, e.target ? ("texto" != e.target.objetoTipo && a.cerrarMenus(!0), e.target.controlEdit ? (c.editarTexto(l.selected.lastSelectedObjects.last), c.esconderControles(), void c.quitarBorde()) : e.target.controlDelete ? (c.removeObjeto(l.selected.lastSelectedObjects.last), c.esconderControles(), void c.quitarBorde()) : null == l.canvas.fabricCanvas.getActiveObject() ? void c.fabricCanvasVistaPrevia() : void c.generarControles(l.selected.lastSelectedObjects.last)) : null == l.canvas.fabricCanvas.getActiveObject() ? (a.cerrarMenus(!0), void c.fabricCanvasVistaPrevia()) : void 0
                    }
                }
            },
            fabricCanvasFondoColor: {
                fondoColor: {
                    onMouseDown: function(e) {
                        x = e.e.offsetX, y = e.e.offsetY, p = l.canvas.fabricCanvasFondoColor.getContext().getImageData(x, y, 1, 1), hex = "#" + ("000000" + c.utils.rgbToHex(p.data[0], p.data[1], p.data[2])).slice(-6), c.setGlobalProperty("colorFondo", hex), l.canvas.back.filters.push(new fabric.Image.filters.Tint({
                            color: l.globalProperties.colorFondo,
                            opacity: 1
                        })), l.canvas.templateBackground.setColor(l.globalProperties.colorFondo), l.canvas.back.applyFilters(l.canvas.fabricCanvas.renderAll.bind(l.canvas.fabricCanvas)), l.canvas.fabricCanvasFondoColor.defaultCursor = "default"
                    },
                    onMouseMove: function(e) {
                        x = e.e.offsetX, y = e.e.offsetY, p = l.canvas.fabricCanvasFondoColor.getContext().getImageData(x, y, 1, 1), hex = "#" + ("000000" + c.utils.rgbToHex(p.data[0], p.data[1], p.data[2])).slice(-6), c.setGlobalProperty("eyeDroppingFondoColor", hex)
                    }
                }
            },
            fabricCanvasFondoColorModal: {
                fondoColor: {
                    onMouseDown: function(e) {
                        x = e.e.offsetX, y = e.e.offsetY, p = l.canvas.fabricCanvasFondoColorModal.getContext().getImageData(x, y, 1, 1), hex = "#" + ("000000" + c.utils.rgbToHex(p.data[0], p.data[1], p.data[2])).slice(-6), c.setGlobalProperty("colorFondo", hex), l.canvas.back.filters.push(new fabric.Image.filters.Tint({
                            color: l.globalProperties.colorFondo,
                            opacity: 1
                        })), l.canvas.templateBackground.setColor(l.globalProperties.colorFondo), l.canvas.back.applyFilters(l.canvas.fabricCanvas.renderAll.bind(l.canvas.fabricCanvas)), l.canvas.fabricCanvasFondoColorModal.defaultCursor = "default"
                    },
                    onMouseMove: function(e) {
                        x = e.e.offsetX, y = e.e.offsetY, p = l.canvas.fabricCanvasFondoColorModal.getContext().getImageData(x, y, 1, 1), hex = "#" + ("000000" + c.utils.rgbToHex(p.data[0], p.data[1], p.data[2])).slice(-6), c.setGlobalProperty("eyeDroppingFondoColor", hex)
                    }
                }
            },
            fabricCanvasTextoColor: {
                textoColor: {
                    onMouseDown: function(e) {
                        var a, t, o, n;
                        l.globalProperties.eyeDroppingTexto && (a = e.e.offsetX, t = e.e.offsetY, o = l.canvas.fabricCanvas.getContext().getImageData(a, t, 1, 1), n = "#" + ("000000" + c.utils.rgbToHex(o.data[0], o.data[1], o.data[2])).slice(-6), l.globalProperties.colorTexto = n, l.selected.textoSelected.setColor(l.globalProperties.colorTexto), l.canvas.fabricCanvas.renderAll(), c.setGlobalProperty("eyeDroppingTexto", !1), l.canvas.fabricCanvas.defaultCursor = "default")
                    },
                    onMouseMove: function(e) {
                        var a, t, o, n;
                        l.globalProperties.eyeDroppingTexto && (a = e.e.offsetX, t = e.e.offsetY, o = l.canvas.fabricCanvas.getContext().getImageData(a, t, 1, 1), n = "#" + ("000000" + c.utils.rgbToHex(o.data[0], o.data[1], o.data[2])).slice(-6), c.setGlobalProperty("eyeDroppingTextoColor", n))
                    }
                },
                canvas: {
                    onMouseDown: function(e) {
                        x = e.e.offsetX, y = e.e.offsetY, p = l.canvas.fabricCanvasTextoColor.getContext().getImageData(x, y, 1, 1), hex = "#" + ("000000" + c.utils.rgbToHex(p.data[0], p.data[1], p.data[2])).slice(-6), c.setGlobalProperty("colorTexto", hex), l.selected.textoSelected.setColor(l.globalProperties.colorTexto), l.canvas.fabricCanvas.renderAll(), l.canvas.fabricCanvasFondoColor.defaultCursor = "default"
                    },
                    onMouseMove: function(e) {
                        x = e.e.offsetX, y = e.e.offsetY, p = l.canvas.fabricCanvasTextoColor.getContext().getImageData(x, y, 1, 1), hex = "#" + ("000000" + c.utils.rgbToHex(p.data[0], p.data[1], p.data[2])).slice(-6), c.setGlobalProperty("eyeDroppingTextoColor", hex)
                    }
                }
            },
            fabricCanvasTextoColorModal: {
                textoColor: {
                    onMouseDown: function(e) {
                        var a, t, o, n;
                        l.globalProperties.eyeDroppingTexto && (a = e.e.offsetX, t = e.e.offsetY, o = l.canvas.fabricCanvas.getContext().getImageData(a, t, 1, 1), n = "#" + ("000000" + c.utils.rgbToHex(o.data[0], o.data[1], o.data[2])).slice(-6), l.globalProperties.colorTexto = n, l.selected.textoSelected.setColor(l.globalProperties.colorTexto), l.canvas.fabricCanvas.renderAll(), c.setGlobalProperty("eyeDroppingTexto", !1), l.canvas.fabricCanvas.defaultCursor = "default")
                    },
                    onMouseMove: function(e) {
                        var a, t, o, n;
                        l.globalProperties.eyeDroppingTexto && (a = e.e.offsetX, t = e.e.offsetY, o = l.canvas.fabricCanvas.getContext().getImageData(a, t, 1, 1), n = "#" + ("000000" + c.utils.rgbToHex(o.data[0], o.data[1], o.data[2])).slice(-6), c.setGlobalProperty("eyeDroppingTextoColor", n))
                    }
                },
                canvas: {
                    onMouseDown: function(e) {
                        x = e.e.offsetX, y = e.e.offsetY, p = l.canvas.fabricCanvasTextoColor.getContext().getImageData(x, y, 1, 1), hex = "#" + ("000000" + c.utils.rgbToHex(p.data[0], p.data[1], p.data[2])).slice(-6), c.setGlobalProperty("colorTexto", hex), l.selected.textoSelected.setColor(l.globalProperties.colorTexto), l.canvas.fabricCanvas.renderAll(), l.canvas.fabricCanvasFondoColorModal.defaultCursor = "default"
                    },
                    onMouseMove: function(e) {
                        x = e.e.offsetX, y = e.e.offsetY, p = l.canvas.fabricCanvasTextoColorModal.getContext().getImageData(x, y, 1, 1), hex = "#" + ("000000" + c.utils.rgbToHex(p.data[0], p.data[1], p.data[2])).slice(-6), c.setGlobalProperty("eyeDroppingTextoColor", hex)
                    }
                }
            }
        }
    }
}]), angular.module("main").factory("resizeService", ["$rootScope", "fabricService", function(e, a) {
    var t;
    return t = {
        resize: function(e, t, o, l) {
            var n = a.getService(),
                c = e / n.canvas.back.height;
            null == n.canvas.initialWidth && a.setInitialWidthCanvas(o), a.setBackScale(c), a.zoomIt(e / t, o / l, c), a.setWidthCanvas(o), a.fabricCanvasVistaPrevia()
        }
    }
}]), angular.module("main").directive("resize", ["$window", "$rootScope", "fabricService", "resizeService", function(e, a, t, o) {
    return function(a, l) {
        var n;
        n = angular.element(e), a.getElementDimensions = function() {
            return {
                h: l.height(),
                w: l.width()
            }
        }, a.$watch(a.getElementDimensions, function(e, a) {
            width = $(window).width() - 255, height = $(window).height() - 100, fabricServiceS = t.getService(), fabricServiceS.canvas.fabricCanvas.setHeight(height), fabricServiceS.canvas.fabricCanvas.setWidth(width), fabricServiceS.canvas.fabricCanvas.calcOffset(), fabricServiceS.canvas.fabricCanvas.renderAll(), t.fabricCanvasVistaPrevia().then(function() {
                o.resize(e, a)
            })
        }, !0), n.bind("resize", function() {
            a.$apply()
        }), n.bind("load", function() {
            a.$apply()
        })
    }
}]), angular.module("main").factory("fabricServiceEvents", ["fabricService", "$rootScope", "resizeService", function(e, a, t) {
    var o, l;
    return o = {}, l = {
        initFabricCanvasEvents: function() {
            e.getService().canvas.fabricCanvas.selection = !1, e.getService().canvas.fabricCanvas.on("mouse:move", function(a) {
                e.events.fabricCanvas.fondoColor.onMouseMove(a), e.events.fabricCanvasTextoColor.textoColor.onMouseMove(a), e.events.fabricCanvas.canvas.onMouseMove(a)
            }), e.getService().canvas.fabricCanvas.on("mouse:down", function(a) {
                e.events.fabricCanvas.canvas.onMouseDown(a), e.events.fabricCanvas.fondoColor.onMouseDown(a), e.events.fabricCanvasTextoColor.textoColor.onMouseDown(a)
            }), e.getService().canvas.fabricCanvas.on("mouse:over", function(a) {
                e.events.fabricCanvas.canvas.onMouseOver(a)
            }), e.getService().canvas.fabricCanvas.on("mouse:up", function(a) {
                e.events.fabricCanvas.canvas.onMouseUp(a)
            }), e.getService().canvas.fabricCanvas.on("after:render", function() {
                e.getService().canvas.fabricCanvas.calcOffset()
            })
        },
        initFabricCanvasFondoColorEvents: function() {
            e.getService().canvas.fabricCanvasFondoColor.on("mouse:move", function(a) {
                e.events.fabricCanvasFondoColor.fondoColor.onMouseMove(a)
            }), e.getService().canvas.fabricCanvasFondoColor.on("mouse:down", function(a) {
                e.events.fabricCanvasFondoColor.fondoColor.onMouseDown(a)
            }), e.getService().canvas.fabricCanvasFondoColor.on("after:render", function() {
                e.getService().canvas.fabricCanvasFondoColor.calcOffset()
            }), e.getService().canvas.fabricCanvasFondoColorModal.on("mouse:move", function(a) {
                e.events.fabricCanvasFondoColorModal.fondoColor.onMouseMove(a)
            }), e.getService().canvas.fabricCanvasFondoColorModal.on("mouse:down", function(a) {
                e.events.fabricCanvasFondoColorModal.fondoColor.onMouseDown(a)
            }), e.getService().canvas.fabricCanvasFondoColorModal.on("after:render", function() {
                e.getService().canvas.fabricCanvasFondoColorModal.calcOffset()
            })
        },
        initFabricCanvasTextoColorEvents: function() {
            e.getService().canvas.fabricCanvasTextoColor.on("mouse:move", function(a) {
                e.events.fabricCanvasTextoColor.canvas.onMouseMove(a)
            }), e.getService().canvas.fabricCanvasTextoColor.on("mouse:down", function(a) {
                e.events.fabricCanvasTextoColor.canvas.onMouseDown(a), e.events.fabricCanvasTextoColor.textoColor.onMouseDown(a), e.events.fabricCanvasTextoColor.textoColor.onMouseMove(a)
            }), e.getService().canvas.fabricCanvasTextoColorModal.on("mouse:move", function(a) {
                e.events.fabricCanvasTextoColorModal.canvas.onMouseMove(a)
            }), e.getService().canvas.fabricCanvasTextoColorModal.on("mouse:down", function(a) {
                e.events.fabricCanvasTextoColor.canvas.onMouseDown(a), e.events.fabricCanvasTextoColor.textoColor.onMouseDown(a), e.events.fabricCanvasTextoColor.textoColor.onMouseMove(a)
            })
        }
    }
}]), angular.module("main").factory("menuService", ["$rootScope", function(e) {
    var a, t;
    return a = {
        menu: {
            agregarTextoMenu: !1,
            agregarTextoMenuModal: !1,
            modificarFondoMenu: !1,
            modificarFondoMenuModal: !1,
            clipArtsMenu: !1,
            elegirTipo: !1,
            elegirMarca: !1,
            elegirMarcaSlim: !1,
            elegirMarcaRubber: !1,
            elegirMarcaAntishock: !1,
            elegirCaseHTC: !1,
            elegirCaseZTE: !1,
            elegirCaseSony: !1,
            elegirCaseSamsung: !1,
            elegirCaseLG: !1,
            elegirCaseNexus: !1,
            elegirCaseMotorola: !1,
            elegirCaseApple: !1,
            elegirSlimCaseHTC: !1,
            elegirSlimCaseZTE: !1,
            elegirSlimCaseSony: !1,
            elegirSlimCaseSamsung: !1,
            elegirSlimCaseLG: !1,
            elegirSlimCaseNexus: !1,
            elegirSlimCaseMotorola: !1,
            elegirSlimCaseApple: !1,
            elegirRubberCaseSamsung: !1,
            elegirRubberCaseApple: !1,
            elegirAntishockCaseSamsung: !1,
            elegirAntishockCaseApple: !1,
            collage: !1,
        }
        /*
            menu: {
            agregarTextoMenu: !1,
            agregarTextoMenuModal: !1,
            modificarFondoMenu: !1,
            modificarFondoMenuModal: !1,
            clipArtsMenu: !1,
            elegirMarca: !1,
            elegirCaseHTC: !1,
            elegirCaseZTE: !1,
            elegirCaseSony: !1,
            elegirCaseSamsung: !1,
            elegirCaseLG: !1,
            elegirCaseNexus: !1,
            elegirCaseMotorola: !1,
            elegirCaseApple: !1,
            collage: !1,
        }
        */
    }, t = {
        getMenu: function() {
            return a.menu
        },
        setMenuProperty: function(e, t) {
            a.menu[e] = t
        },
        cerrarMenus: function(t) {
            angular.forEach(a.menu, function(e, t) {
                a.menu[t] = !1
            }), e.$broadcast("cerrarMenus", t)
        },
        cerrarMenu: function(t) {
            console.log("cerrar el menu ", t), a.menu[t] = !1, e.$broadcast("cerrarMenu", t)
        },
        abrirMenu: function(o) {
            return console.log("vamo a intenta abrir el menu", o), a.menu[o] ? (t.cerrarMenus(), !1) : (t.cerrarMenus(), a.menu[o] = !0, console.log("hacemos true el menu", o), console.log(a.menu), e.$broadcast("abrirMenu", o), !0)
        }
    }
}]), angular.module("main").factory("casesService", [function() {
    var e, a;
    return e = [], a = {
        getCases: function() {
            return e
        },
        pushCase: function(a) {
            e.push(a)
        },
        deleteCase: function(a) {
            e.splice(a, 1)
        }
    }
}]), angular.module("main").controller("ClipartsCtrl", ["$scope", "$http", "casesService", "close", "$element", "fabricService", function(e, a, t, o, l, n) {
    e.caComics = !0, e.caCm = function() {
        e.caComics = !0, e.caEmoji = !1, e.caQuotesgram = !1, e.caFrases = !1, e.caColors = !1, e.caHearts = !1, e.caHanddrawings = !1
    }, e.caE = function() {
        e.caComics = !1, e.caEmoji = !0, e.caQuotesgram = !1, e.caFrases = !1, e.caColors = !1, e.caHearts = !1, e.caHanddrawings = !1
    }, e.caQ = function() {
        e.caComics = !1, e.caEmoji = !1, e.caQuotesgram = !0, e.caFrases = !1, e.caColors = !1, e.caHearts = !1, e.caHanddrawings = !1
    }, e.caF = function() {
        e.caComics = !1, e.caEmoji = !1, e.caQuotesgram = !1, e.caFrases = !0, e.caColors = !1, e.caHearts = !1, e.caHanddrawings = !1
    }, e.caC = function() {
        e.caComics = !1, e.caEmoji = !1, e.caQuotesgram = !1, e.caFrases = !1, e.caColors = !0, e.caHearts = !1, e.caHanddrawings = !1
    }, e.caH = function() {
        e.caComics = !1, e.caEmoji = !1, e.caQuotesgram = !1, e.caFrases = !1, e.caColors = !1, e.caHearts = !0, e.caHanddrawings = !1
    }, e.caHd = function() {
        e.caComics = !1, e.caEmoji = !1, e.caQuotesgram = !1, e.caFrases = !1, e.caColors = !1, e.caHearts = !1, e.caHanddrawings = !0
    }, e.agregarClipArt = function(e) {
        n.objetos.agregarImagen(e), l.modal("hide"), o({}, 1e3)
    }
}]), angular.module("main").controller("CollagesCtrl", ["$scope", "$http", "casesService", "close", "$element", "fabricService", function(e, a, t, o, l, n) {
    e.elegirCollage = function(e) {
        l.modal("hide"), o({
            collage: e
        }, 400)
    }
}]), angular.module("main").factory("actionsService", ["$rootScope", function(e) {
    var a, t;
    return a = {
        obj: null,
        type: null,
        url: null
    }, t = {
        getService: function() {
            return a
        },
        insertarClipart: function(t) {
            a.url = t, a.type = "insertarClipArt", e.$broadcast("actionCalled")
        }
    }
}]), angular.module("main").controller("hacerPedidoCtrl", ["$scope", "$http", "casesService", "close", "$element", function(e, a, t, o, l) {
    e.showLogin = !1, e.login = function() {
        e.showLogin = !0
    }, e.registrar = function() {
        e.showLogin = !1
    }, e.cancelar = function() {
        l.modal("hide"), o({}, 200)
    }, e.enviar = function() {
        e.loadingx = !0, console.log("se intenta enviar el pedido"), e.usuario || e.pass || angular.forEach(t.getCases(), function(t, l) {
            a({
                method: "post",
                url: "/ordenes/agregar",    
                data: {
                    cliente_nombre: e.cliente_nombre,
                    cliente_dir: e.cliente_dir,
                    cliente_rfc: e.cliente_rfc,
                    tipo_entrega: e.tipo_entrega,
                    imagen_case: t.casee,
                    piezas: t.piezas
                }
            }).success(function(a) {
                e.loadingx = !1, swal("¡Excelente!", "Se ha enviado su orden", "success"), o()
            })
        })
    }
}]), angular.module("main").controller("modalCtrl", ["$scope", "$http", "casesService", "close", "$element", "ModalService", "fabricService", function(e, a, t, o, l, n, c) {
    e.cancelar = function() {
        l.modal("hide"), o({}, 200)
    }, e.archivosGuardados = t.getCases(), e.totalPiezas = function() {
        var e = 0;
        return angular.forEach(t.getCases(), function(a, t) {
            e += a.piezas
        }), e
    }, e.eliminar = function(e) {
        t.deleteCase(e)
    }, e.hacerPedido = function() {
        console.log("se hace el pedido"), a({
            method: "get",
            url: "/ordenes/crear"
        }).success(function(l) {
            angular.forEach(t.getCases(), function(t, n) {
                a({
                    method: "get",
                    url: "/getUserId"
                }).success(function(n) {
                    console.log(n);
                    var r = n;
                    console.log(c.getService().selected.dispositivoSeleccionado), a({
                        method: "post",
                        url: "/ordenes/agregar",
                        data: {
                            cliente_id: r,
                            imagen_case: t.casee,
                            piezas: t.piezas,
                            orden_id: l,
                            modelo: t.modelo
                        }
                    }).success(function(a) {
                        e.loadingx = !1, swal("¡Excelente!", "Se ha enviado su orden", "success"), o()
                    })
                })
            })
        })
    }
}]), angular.module("main").controller("TextoCtrl", ["$scope", "$http", "casesService", "close", "$element", "fabricService", function(e, a, t, o, l, n) {
    console.log("se ejecuta el controlador del texto color modal"), n.getService().canvas.fabricCanvasTextoColorModal = new fabric.Canvas("textoColorCanvasModal2"),
        console.log(n.getService().canvas.fabricCanvasTextoColorModal), n.getService().canvas.fabricCanvasTextoColorModal.on("mouse:move", function(e) {
            n.events.fabricCanvasTextoColorModal.canvas.onMouseMove(e)
        }), n.getService().canvas.fabricCanvasTextoColorModal.on("mouse:down", function(e) {
            n.events.fabricCanvasTextoColorModal.canvas.onMouseDown(e), n.events.fabricCanvasTextoColorModal.textoColor.onMouseDown(e), n.events.fabricCanvasTextoColorModal.textoColor.onMouseMove(e)
        }), n.fabricCanvasTextoColorModalInit(), e.textoContenido = n.getService().selected.textoSelected.text, e.modificarTexto = function() {
            var a = n.getService().selected.textoSelected;
            return a.set({
                text: e.textoContenido,
                fontFamily: e.fontTexto,
                fontSize: 50
            }), n.objetos.util.scaleAndPositionToBack(a), n.getService().selected.textoSelected.setColor(n.getService().globalProperties.colorTexto), n.getService().canvas.fabricCanvas.renderAll()
        }
}]), angular.module("main").controller("mainCtrl", ["$scope", "Upload", "$window", "$rootScope", "$http", "SweetAlert", "ModalService", "casesService", "actionsService", "fabricService", "resizeService", "fabricServiceEvents", "menuService", function(e, a, t, o, l, n, c, r, s, i, g, p, d) {
    function v() {
        width <= 768 && (console.log("inner width is less than 768", $("#container1").height()), width = jQuery(window).width(), height = jQuery(window).height() - 250), width > 768 && (width = jQuery(window).width() - 225, height = jQuery(window).height() - 126), h = i.getService(), h.canvas.fabricCanvas.setHeight(height), h.canvas.fabricCanvas.setWidth(width), h.canvas.fabricCanvas.calcOffset(), h.canvas.fabricCanvas.renderAll(), i.fabricCanvasVistaPrevia().then(function() {
            var e, a, t, o;
            null == f && (f = height, m = width), e = f, a = height, f = a, t = m, o = width, m = o, g.resize(a, e, o, t)
        })
    }

    function b() {
        jQuery(window).width() <= 768 && (console.log("inner with is less than 768", $("#container1").height()), width = jQuery(window).width(), height = jQuery(window).height() - 250), jQuery(window).width() > 768 && (width = jQuery(window).width() - 225, height = jQuery(window).height() - 126), h = i.getService(), h.canvas.fabricCanvas.setHeight(height), h.canvas.fabricCanvas.setWidth(width), h.canvas.fabricCanvas.calcOffset(), h.canvas.fabricCanvas.renderAll(), i.setImages(height).then(function() {
            var e, a, t, o;
            null == f && (f = height, m = width), e = f, a = height, f = a, t = m, o = width, m = o, g.resize(a, e, o, t)
        })
    }
    e.setDropperCursor = function() {
        i.getService().canvas.fabricCanvas.defaultCursor = "url(/EyeDropper.cur) 0 16,default"
    };
    var f = null,
        m = null,
        u = angular.element(t);
    u.bind("resize", function(e) {
        v()
    }), null == f && b();
    var h, C;
    h = i.getService(), p.initFabricCanvasEvents(), p.initFabricCanvasFondoColorEvents(), p.initFabricCanvasTextoColorEvents(), i.fabricCanvasFondoColorInit(), i.fabricCanvasTextoColorInit(), i.fabricCanvasTextoColorModalInit(), i.fabricCanvasFondoColorModalInit(), e.dispositivoSeleccionado = posicionesDispositivos[i.getService().selected.dispositivoSeleccionado].name, e.menu = {
 /*       agregarTextoMenu: !1,
        agregarTextoMenuModal: !1,
        modificarFondoMenu: !1,
        clipArtsMenu: !1,
        elegirMarca: !1,
        elegirCaseHTC: !1,
        elegirCaseZTE: !1,
        elegirCaseSony: !1,
        elegirCaseSamsung: !1,
        elegirCaseLG: !1,
        elegirCaseNexus: !1,
        elegirCaseMotorola: !1,
        elegirCaseApple: !1,
        collage: !1   */
        agregarTextoMenu: !1,
        agregarTextoMenuModal: !1,
        modificarFondoMenu: !1,
        modificarFondoMenuModal: !1,
        elegirTipo: !1,
        elegirMarca: !1,
        elegirMarcaSlim: !1,
        elegirMarcaRubber: !1,
        elegirMarcaAntishock: !1,
        elegirCaseHTC: !1,
        elegirCaseZTE: !1,
        elegirCaseSony: !1,
        elegirCaseSamsung: !1,
        elegirCaseLG: !1,
        elegirCaseNexus: !1,
        elegirCaseMotorola: !1,
        elegirCaseApple: !1,
        elegirSlimCaseHTC: !1,
        elegirSlimCaseZTE: !1,
        elegirSlimCaseSony: !1,
        elegirSlimCaseSamsung: !1,
        elegirSlimCaseLG: !1,
        elegirSlimCaseNexus: !1,
        elegirSlimCaseMotorola: !1,
        elegirSlimCaseApple: !1,
        elegirRubberCaseSamsung: !1,
        elegirRubberCaseApple: !1,
        elegirAntishockCaseSamsung: !1,
        elegirAntishockCaseApple: !1,
        collage: !1,
    }, e.fontTexto = "Arial";
    var x = function(a) {
        angular.forEach(e.menu, function(a, t) {
            e.menu[t] = !1
        }), a && e.$apply()
    };
    e.cerrarTodosLosMenus = function() {
        return d.cerrarMenus()
    }, e.agregarClipArt = function(e) {
        return console.log("vamos a agregar unc lipar"), i.agregarImagen(e)
    }, e.vistaPrevia = function() {
        return i.fabricCanvasVistaPrevia()
    }, e.files = [], e.$watch("files", function(e) {
        var a, t, o, l;
        if (e && e.length) {
            for (l = [], t = 0, o = e.length; o > t; t++) a = e[t], l.push(C(a));
            return l
        }
    }), e.upload = function(e) {
        var a, t, o, l;
        if (e && e.length) {
            for (l = [], t = 0, o = e.length; o > t; t++) a = e[t], l.push(C(a));
            return l
        }
    }, e.abrirColorFondoMenu = function() {
        d.abrirMenu("modificarFondoMenu")
    }, e.abrirColorFondoMenuModal = function() {
        d.abrirMenu("modificarFondoMenuModal")
    }, e.agregarTexto = function() {
        return e.textoContenido = "", d.abrirMenu("agregarTextoMenu") ? (i.setSelected("textoSelected", i.objetos.agregarTexto("", "Arial", "#000000")), console.log(i.getService().selected), void(null == i.getService().canvas.collage.collage && i.fabricCanvasVistaEditor())) : void 0
    }, e.agregarTextoModal = function() {
        return e.textoContenido = "", d.abrirMenu("agregarTextoMenuModal") ? (i.setSelected("textoSelected", i.objetos.agregarTexto("", "Arial", "#000000")), console.log(i.getService().selected), void(null == i.getService().canvas.collage.collage && i.fabricCanvasVistaEditor())) : void 0
    }, o.$on("cerrarMenu", function(a, t) {
        console.log("vamos a cerrar ", t), e.menu[t] = !1
    }), o.$on("cerrarMenus", function(e, a) {
        console.log("vamos a cerrar todos los menus"), x(a)
    }), o.$on("abrirMenu", function(a, t) {
        console.log("vamos a abir ", t), e.menu[t] = !0, e.$apply()
    }), o.$on("globalPropertyChanged", function(a, t) {
        e[t.property] = t.value, e.$apply()
    }), e.modificarTexto = function() {
        var a = i.getService().selected.textoSelected;
        return a.set({
            text: e.textoContenido,
            fontFamily: e.fontTexto,
            fontSize: 50
        }), i.objetos.util.scaleAndPositionToBack(a), i.getService().selected.textoSelected.setColor(i.getService().globalProperties.colorTexto), h.canvas.fabricCanvas.renderAll()
    }, e.abrirCollageMenu = function() {
        return c.showModal({
            templateUrl: "collages.html",
            controller: "CollagesCtrl"
        }).then(function(e) {
            return e.element.modal(), e.close.then(function(e) {
                i.collage.setCollage(e.collage), i.collage.posicionarTodosLosElementosYCirculos()
            })
        })
    }, e.abrirClipArtsMenu = function() {
        return c.showModal({
            templateUrl: "cliparts.html",
            controller: "ClipartsCtrl"
        }).then(function(e) {
            return e.element.modal(), e.close.then(function(e) {})
        })
    }, e.elegirCase = function(a) {
        var o, l;
        t.innerWidth <= 768 && (o = t.innerWidth, l = t.innerHeight - 218), t.innerWidth > 768 && (o = t.innerWidth - 225, l = t.innerHeight - 125), e.menu.elegirCaseHTC = !1, e.menu.elegirCaseZTE = !1, e.menu.elegirCaseSony = !1, e.menu.elegirCaseSamsung = !1, e.menu.elegirCaseLG = !1, e.menu.elegirCaseNexus = !1, e.menu.elegirCaseMotorola = !1, e.menu.elegirCaseApple = !1, i.setSelected("dispositivoSeleccionado", a), e.dispositivoSeleccionado = posicionesDispositivos[a].name, i.setImages(l).then(function() {
            v(), i.fabricCanvasVistaPrevia()
        })
    }, e.elegirCaseSlim = function(a) {
        var o, l;
        t.innerWidth <= 768 && (o = t.innerWidth, l = t.innerHeight - 218), t.innerWidth > 768 && (o = t.innerWidth - 225, l = t.innerHeight - 125), e.menu.elegirSlimCaseHTC = !1, e.menu.elegirSlimCaseZTE = !1, e.menu.elegirSlimCaseSony = !1, e.menu.elegirSlimCaseSamsung = !1, e.menu.elegirSlimCaseLG = !1, e.menu.elegirSlimCaseNexus = !1, e.menu.elegirSlimCaseMotorola = !1, e.menu.elegirSlimCaseApple = !1, i.setSelected("dispositivoSeleccionado", a), e.dispositivoSeleccionado = posicionesDispositivos[a].name, i.setImages(l).then(function() {
            v(), i.fabricCanvasVistaPrevia()
        })
    }, e.elegirCaseRubber = function(a) {
        var o, l;
        t.innerWidth <= 768 && (o = t.innerWidth, l = t.innerHeight - 218), t.innerWidth > 768 && (o = t.innerWidth - 225, l = t.innerHeight - 125), e.menu.elegirRubberCaseSamsung = !1, e.menu.elegirRubberCaseApple = !1, i.setSelected("dispositivoSeleccionado", a), e.dispositivoSeleccionado = posicionesDispositivos[a].name, i.setImages(l).then(function() {
            v(), i.fabricCanvasVistaPrevia()
        })
    }, e.elegirCaseAntishock = function(a) {
        var o, l;
        t.innerWidth <= 768 && (o = t.innerWidth, l = t.innerHeight - 218), t.innerWidth > 768 && (o = t.innerWidth - 225, l = t.innerHeight - 125), e.menu.elegirAntishockCaseSamsung = !1, e.menu.elegirAntishockCaseApple = !1, i.setSelected("dispositivoSeleccionado", a), e.dispositivoSeleccionado = posicionesDispositivos[a].name, i.setImages(l).then(function() {
            v(), i.fabricCanvasVistaPrevia()
        })
    }, e.elegirMarca = function(a) {
        e.menu.elegirMarca = !1, "HTC" === a && d.abrirMenu("elegirCaseHTC"), "ZTE" === a && d.abrirMenu("elegirCaseZTE"), "Sony" === a && d.abrirMenu("elegirCaseSony"), "Samsung" === a && d.abrirMenu("elegirCaseSamsung"), "LG" === a && d.abrirMenu("elegirCaseLG"), "Nexus" === a && d.abrirMenu("elegirCaseNexus"), "Motorola" === a && d.abrirMenu("elegirCaseMotorola"), "Apple" === a && d.abrirMenu("elegirCaseApple")
    }, e.elegirMarcaSlim = function(a) {
        e.menu.elegirMarcaSlim = !1, "HTC" === a && d.abrirMenu("elegirSlimCaseHTC"), "ZTE" === a && d.abrirMenu("elegirSlimCaseZTE"), "Sony" === a && d.abrirMenu("elegirSlimCaseSony"), "Samsung" === a && d.abrirMenu("elegirSlimCaseSamsung"), "LG" === a && d.abrirMenu("elegirSlimCaseLG"), "Nexus" === a && d.abrirMenu("elegirSlimCaseNexus"), "Motorola" === a && d.abrirMenu("elegirSlimCaseMotorola"), "Apple" === a && d.abrirMenu("elegirSlimCaseApple")
    }, e.elegirMarcaRubber = function(a) {
        e.menu.elegirMarcaSlim = !1, "Samsung" === a && d.abrirMenu("elegirRubberCaseSamsung"), "Apple" === a && d.abrirMenu("elegirRubberCaseApple")
    }, e.elegirMarcaAntishock = function(a) {
        e.menu.elegirMarcaSlim = !1, "Samsung" === a && d.abrirMenu("elegirAntishockCaseSamsung"), "Apple" === a && d.abrirMenu("elegirAntishockCaseApple")
    }, e.elegirTipo = function() {
        d.abrirMenu("elegirTipo")
    }, e.eligirCaseMenu = function() {
        d.abrirMenu("elegirMarca")
    }, e.elegirSlimCaseMenu = function() {
        d.abrirMenu("elegirMarcaSlim")
    }, e.elegirSlimCaseMenu = function() {
        d.abrirMenu("elegirMarcaRubber")
    }, e.elegirSlimCaseMenu = function() {
        d.abrirMenu("elegirMarcaAntishock")
    }, e.canvasClic = function() {
        return x()
    }, e.eyedropper = function() {
        e.setDropperCursor(), i.setGlobalProperty("eyeDropping", !0)
    }, e.eyedropperTexto = function() {
        e.setDropperCursor(), i.setGlobalProperty("eyeDroppingTexto", !0)
    }, C = function(t) {
        return e.loadingx = !0, a.upload({
            url: "/archivos/subir",
            file: t,
            fields: {}
        }).success(function(a, t, o, l) {
            return e.loadingx = !1, console.log("file " + l.file.name + "uploaded. Response: " + a), i.objetos.agregarImagen("/images/uploaded/" + l.file.name)
        })
    }, e.guardar = function() {
        e.loadingx = !0;
        var a = i.fabricCanvasVistaImpresion();
        console.log("ya guey"), console.log(a), l({
            method: "POST",
            url: "/archivos/guardarImagen",
            data: {
                imagen: a
            }
        }).success(function(a) {
            e.loadingx = !1, console.log(a), window.location.href = "https://thecaseinc.myshopify.com/cart/798000443:1?ref=http://caseloveapp.com/images/saved/case_" + a + ".png " + posicionesDispositivos[i.getService().selected.dispositivoSeleccionado].name
        })
    }, e.carrito = function() {
        return c.showModal({
            templateUrl: "modal.html",
            controller: "modalCtrl"
        }).then(function(e) {
            return e.element.modal(), e.close.then(function(e) {})
        })
    }, e.mostrarNombre = function(){
        var nombreDispositivo = e.dispositivoSeleccionado.name;
        console.log("El nombre del dispositivo es: " + posicionesDispositivos[i.getService().selected.dispositivoSeleccionado].name)
    }, e.escribirNombre = function(){
        var nombreDelDispositivo = posicionesDispositivos[i.getService().selected.dispositivoSeleccionado].name;
        console.log("Vamos a cambiar el nombre del dispositivo"),
        document.getElementById("textoDelDispositivo").innerHTML = "posicionesDispositivos[i.getService().selected.dispositivoSeleccionado].name";
    }
}]);