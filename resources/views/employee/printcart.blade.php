<!DOCTYPE html>
<!-- saved from url=(0055)https://sch.ictvtp.la/sch-admin/teach/print-cardAll.php -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Print-card</title>
    <!-- <script defer="" referrerpolicy="origin" src="./Print-card ອາຈານທັງໝົດ_files/s.js.download"></script>
    <script src="./Print-card ອາຈານທັງໝົດ_files/jquery-2.1.4.min.js.download"></script>
    <script src="./Print-card ອາຈານທັງໝົດ_files/jquery-qrcode-0.17.0.js.download"></script> -->
    <style type="text/css">
    body {
        font-family: 'Phetsarath OT';
    }

    #stid {
        background-color: #CCC;
        color: #F00;
        font-size: 14px;
    }

    @media print {
        body {
            background-color: #FFF;
        }

        #tb1 {
            border: 1;
            border-style: solid;
        }

        #tb2 {
            background: url(../../admin/student/logo.png);
            display: block;
        }

        #none_print {
            display: none;
        }
    }

    table {
        page-break-inside: auto
    }

    tr {
        page-break-inside: avoid;
        page-break-after: auto
    }

    thead {
        display: table-header-group
    }

    tfoot {
        display: table-footer-group
    }
    </style>
    <script src="./Print-card ອາຈານທັງໝົດ_files/barcode.js.download"></script>
    <script nonce="3a2e315f-2af7-45e4-935f-571655e79d2b">
    try {
        (function(w, d) {
            ! function(ou, ov, ow, ox) {
                if (ou.zaraz) console.error("zaraz is loaded twice");
                else {
                    ou[ow] = ou[ow] || {};
                    ou[ow].executed = [];
                    ou.zaraz = {
                        deferred: [],
                        listeners: []
                    };
                    ou.zaraz._v = "5806";
                    ou.zaraz._n = "3a2e315f-2af7-45e4-935f-571655e79d2b";
                    ou.zaraz.q = [];
                    ou.zaraz._f = function(oy) {
                        return async function() {
                            var oz = Array.prototype.slice.call(arguments);
                            ou.zaraz.q.push({
                                m: oy,
                                a: oz
                            })
                        }
                    };
                    for (const oA of ["track", "set", "debug"]) ou.zaraz[oA] = ou.zaraz._f(oA);
                    ou.zaraz.init = () => {
                        var oB = ov.getElementsByTagName(ox)[0],
                            oC = ov.createElement(ox),
                            oD = ov.getElementsByTagName("title")[0];
                        oD && (ou[ow].t = ov.getElementsByTagName("title")[0].text);
                        ou[ow].x = Math.random();
                        ou[ow].w = ou.screen.width;
                        ou[ow].h = ou.screen.height;
                        ou[ow].j = ou.innerHeight;
                        ou[ow].e = ou.innerWidth;
                        ou[ow].l = ou.location.href;
                        ou[ow].r = ov.referrer;
                        ou[ow].k = ou.screen.colorDepth;
                        ou[ow].n = ov.characterSet;
                        ou[ow].o = (new Date).getTimezoneOffset();
                        if (ou.dataLayer)
                            for (const oH of Object.entries(Object.entries(dataLayer).reduce(((oI, oJ) => ({
                                    ...oI[1],
                                    ...oJ[1]
                                })), {}))) zaraz.set(oH[0], oH[1], {
                                scope: "page"
                            });
                        ou[ow].q = [];
                        for (; ou.zaraz.q.length;) {
                            const oK = ou.zaraz.q.shift();
                            ou[ow].q.push(oK)
                        }
                        oC.defer = !0;
                        for (const oL of [localStorage, sessionStorage]) Object.keys(oL || {}).filter((oN => oN
                            .startsWith("_zaraz_"))).forEach((oM => {
                            try {
                                ou[ow]["z_" + oM.slice(7)] = JSON.parse(oL.getItem(oM))
                            } catch {
                                ou[ow]["z_" + oM.slice(7)] = oL.getItem(oM)
                            }
                        }));
                        oC.referrerPolicy = "origin";
                        oC.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(ou[ow])));
                        oB.parentNode.insertBefore(oC, oB)
                    };
                    ["complete", "interactive"].includes(ov.readyState) ? zaraz.init() : ou.addEventListener(
                        "DOMContentLoaded", zaraz.init)
                }
            }(w, d, "zarazData", "script");
            window.zaraz._p = async di => new Promise((dj => {
                if (di) {
                    di.e && di.e.forEach((dk => {
                        try {
                            const dl = d.querySelector("script[nonce]"),
                                dm = dl?.nonce || dl?.getAttribute("nonce"),
                                dn = d.createElement("script");
                            dm && (dn.nonce = dm);
                            dn.innerHTML = dk;
                            dn.onload = () => {
                                d.head.removeChild(dn)
                            };
                            d.head.appendChild(dn)
                        } catch (dp) {
                            console.error(`Error executing script: ${dk}\n`, dp)
                        }
                    }));
                    Promise.allSettled((di.f || []).map((dq => fetch(dq[0], dq[1]))))
                }
                dj()
            }));
            zaraz._p({
                "e": ["(function(w,d){})(window,document)"]
            });
        })(window, document)
    } catch (e) {
        throw fetch("/cdn-cgi/zaraz/t"), e;
    };
    </script>
    <script>
    (function(w, d) {})(window, document)
    </script>
    <script>
    (function(w, d) {
        w.zarazData.executed.push("Pageview");
    })(window, document)
    </script>
    <script>
    (function(w, d) {})(window, document)
    </script>
</head>

<body>
    <div class="text-center">
        <button id="none_print" type="button" onclick="javascript:window.print() ;">ພີມບັດ</button>
    </div>
    <table>
        <tbody>
            <tr>
                <td>
                    <form id="print">
                        <table id="tb1" border="1" cellpadding="2px" cellspacing="0"
                            style="border-style:double; border-radius:10px;" align="center">
                            <tbody>
                                <tr>
                                    <td align="center" style=" border-radius:10px;">
                                        <div id="print">
                                        </div>
                                        <table id="tb2" border="0" cellspacing="0" align="center"
                                            background="./Print-card ອາຈານທັງໝົດ_files/bg.png"
                                            style="background-repeat:no-repeat; background-position: center; background-size:contain">
                                            <tbody>
                                                <tr>
                                                    <td colspan="4" align="center" style="font-size:10px">ສາທາລະນະລັດ
                                                        ປະຊາທິປະໄຕ ປະຊາຊົນລາວ<br>
                                                        ສັນຕິພາບ ເອກະລາດ ປະຊາທິປະໄຕ ເອກະພາບ ວັດທະນະຖາວອນ</td>

                                                </tr>
                                                <tr>
                                                    <td rowspan="2" style="font-size:11px">
                                                        ສູນກາງ
                                                        ອພສ <br>
                                                        ອພສ
                                                        ແຂວງຫົວພັນ <br>
                                                        ມ.ສ ສົງ ແຂວງຫົວພັນ </td>
                                                    <td colspan="2" align="center" style="font-size:14px">
                                                        <strong><u>ບັດພະນັກງານ</u></strong>
                                                    </td>
                                                    <td rowspan="2" align="left" valign="top" style="font-size:11px">
                                                        ລົງວັນທີ:<b>19/09/2024</b> </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" align="center" style="font-size:11px">
                                                        <div id="stid">07-1006501001</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3" valign="top"><img
                                                            src="{{asset($employee->picture)}}" width="90" height="90"
                                                            style="border-radius:5px;"></td>
                                                    <td align="left" valign="top" nowrap="nowrap"
                                                        style="font-size:12px">
                                                        <b>
                                                            ພຣະ {{$employee->firstname}} {{$employee->lastname}} </b>
                                                        <br>
                                                        ວັນເດືອນປີເກີດ:
                                                        <b>
                                                            {{ date('d/m/Y',strtotime($employee->bod)) }} </b><br>
                                                        ທີຕັ້ງໂຮງຮຽນ: ບ້ານ <b>
                                                            ໂພນໄຊ </b><br>
                                                        ເມືອງ <b>
                                                            ຊຳເໜືອ </b>
                                                        <br>
                                                        ແຂວງ <b>
                                                            ຫົວພັນ</b>
                                                        <br>
                                                    </td>
                                                    <td colspan="2" rowspan="3" align="left" valign="top"
                                                        style="font-size:11px">
                                                        <div id="qr12721"><canvas width="90" height="90"></canvas></div>
                                                        <script type="text/javascript">
                                                        $("#qr12721").qrcode({
                                                            size: 90,
                                                            text: 'https://tch.ictvtp.la/index.php?u_name=07-1006501001&pass=2025'
                                                        });
                                                        </script>
                                                        <div align="center"
                                                            style="text-decoration:underline; font-weight:bold;">
                                                            ທີ່: ມ.ສ ສົງ ແຂວງຫົວພັນ</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" valign="top" style="font-size:11px">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </td>
                <!-- <td>
                    <form id="print">
                        <table id="tb1" border="1" cellpadding="2px" cellspacing="0"
                            style="border-style:double; border-radius:10px;" align="center">
                            <tbody>
                                <tr>
                                    <td align="center" style=" border-radius:10px;">
                                        <div id="print">
                                        </div>
                                        <table id="tb2" border="0" cellspacing="0" align="center"
                                            background="./Print-card ອາຈານທັງໝົດ_files/bg.png"
                                            style="background-repeat:no-repeat; background-position: center; background-size:contain">
                                            <tbody>
                                                <tr>
                                                    <td colspan="4" align="center" style="font-size:10px">ສາທາລະນະລັດ
                                                        ປະຊາທິປະໄຕ ປະຊາຊົນລາວ<br>
                                                        ສັນຕິພາບ ເອກະລາດ ປະຊາທິປະໄຕ ເອກະພາບ ວັດທະນະຖາວອນ</td>

                                                </tr>
                                                <tr>
                                                    <td rowspan="2" style="font-size:11px">
                                                        ແຂວງ
                                                        ຫົວພັນ <br>
                                                        ເມືອງ
                                                        ຊຳເໜືອ <br>
                                                        ມ.ສ ສົງ ແຂວງຫົວພັນ </td>
                                                    <td colspan="2" align="center" style="font-size:14px">
                                                        <strong><u>ບັດອາຈານສອນ</u></strong>
                                                    </td>
                                                    <td rowspan="2" align="left" valign="top" style="font-size:11px">
                                                        ລົງວັນທີ:<b>19/09/2024</b> </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" align="center" style="font-size:11px">
                                                        <div id="stid">07-1006501002</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3" valign="top"><img
                                                            src="./Print-card ອາຈານທັງໝົດ_files/T-24-09-13-201638.jpg"
                                                            width="90" height="90" style="border-radius:5px;"></td>
                                                    <td align="left" valign="top" nowrap="nowrap"
                                                        style="font-size:12px">
                                                        <b>
                                                            ທ ຄຳສັກສີ ເທບປັນຍາ </b><br>
                                                        ວັນເດືອນປີເກີດ:
                                                        <b>
                                                            22/05/1991 </b><br>
                                                        ທີຕັ້ງໂຮງຮຽນ: ບ້ານ <b>
                                                            ໂພນໄຊ </b><br>
                                                        ເມືອງ <b>
                                                            ຊຳເໜືອ </b>
                                                        <br>
                                                        ແຂວງ <b>
                                                            ຫົວພັນ</b>
                                                        <br>
                                                    </td>
                                                    <td colspan="2" rowspan="3" align="left" valign="top"
                                                        style="font-size:11px">
                                                        <div id="qr12722"><canvas width="90" height="90"></canvas></div>
                                                        <script type="text/javascript">
                                                        $("#qr12722").qrcode({
                                                            size: 90,
                                                            text: 'https://tch.ictvtp.la/index.php?u_name=07-1006501002&pass=6ITL'
                                                        });
                                                        </script>
                                                        <div align="center"
                                                            style="text-decoration:underline; font-weight:bold;">
                                                            ທີ່: ມ.ສ ສົງ ແຂວງຫົວພັນ</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" valign="top" style="font-size:11px">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </td> -->
            </tr>
        </tbody>
    </table>

</body>

</html>