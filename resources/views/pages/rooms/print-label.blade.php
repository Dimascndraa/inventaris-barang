<!DOCTYPE HTML>
<html>

<head>
    <title>Print</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

    {{--
    <link rel="stylesheet/less" type="text/css" media="all" href="/css/print.css" /> --}}
    <link rel="stylesheet" type="text/css" href="/css/custom.css" />
    <script src="http://192.168.1.253/real/include/js/jquerynless.js" type="text/javascript"></script>
</head>

<body>
    <style type="text/css">
        * {
            font-family: sans-serif;
        }

        table {
            margin: 1%;
            margin-top: 0.5cm;
            margin-left: 0.3cm;
        }

        .head_label {
            font-size: 1em;
        }

        .head_anak {
            font-size: 0.9em;
            /* font-weight: bold; */
            line-height: 1.6em;
        }

        .block {
            width: 6.8cm;
            height: 3.2cm;
            display: inline-block;
            float: left;
            vertical-align: middle;
        }

        @media print {
            .ceklist {
                display: none !important;
            }

            .delete {
                display: none !important;
            }

            #functions {
                display: none !important;
            }
        }

        #functions {
            margin-top: -1rem;
            padding: 1px;
            margin-left: -1rem;
            background: #eaeaea;
            position: relative;
        }

        li {
            display: inline-block;
            list-style-type: none;
            border: 1px solid black;
            padding: .2rem;
            background: #fff;
        }

        a {
            text-decoration: none;
            color: black;
        }

        .delete {
            margin-left: 10px
        }
    </style>

    <div id="functions">
        <ul>
            <li><a href="#" onClick="printx();">Print</a></li>
            <li><a href="/rooms/{{ $room_id }}">Back</a></li>
        </ul>
    </div>

    <div style="width:21.3cm; height: 13.8cm; margin-left: -9px;">
        @foreach ($items as $item)
        <div class="block">
            <div class="delete" style="float:right"><a href="#"><img src="/img/delete.png" /></a></div>
            <div class="ceklist" style="float:right"><a href="#"><img src="/img/tick.png" /></a></div>
            <table width="100%" border="0" class="whowme">
                <tr>
                    <td style="text-align: center"><span class="head_anak">No: </span></td>
                </tr>
                <tr>
                    <td style="text-align: center; font-weight: bold;"><span class="head_anak">{{ $item->item_code
                            }}</span></td>
                </tr>
            </table>
        </div>
        @endforeach
    </div>

    <script type="text/javascript" src="/js/jquery-barcode.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $(".toggle_container").show();

            $(".ceklist").click(function() {

                $('.ceklist').siblings().hide();
                $('.ceklist').hide();
                $(this).next().show();
                $(this).show();
            });

            $(".delete").click(function() {
                $(this).siblings().hide();
                $(this).hide();
            });

            $(".barcode_rm").barcode("{PID}", "code128", {
                barWidth: 2,
                barHeight: 20,
                fontSize: 13,
                showHRI: false
            });
        });

        function printx() {
            document.getElementById('functions').style.display = "none";
            window.print();
            document.getElementById('functions').style.display = "";
        }
    </script>

</body>

</html>