<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
        <script type="text/javascript">
            function calculateMonthlyAmort() {
                var p = document.addem.principal.value;
                var terms = document.addem.terms.value;
                var w = Math.pow(1.019, document.addem.terms.value);
                var monthly = (eval((p * 0.019 *w) / (w-1))).toFixed(2);
                document.getElementById('monthly_amort').innerHTML = monthly;
                document.getElementById('principalHolder').innerHTML = p;
                document.getElementById('termsHolder').innerHTML = terms;
            }

            function addTable() {
                var p = document.addem.principal.value;
                var terms = document.addem.terms.value;
                var w = Math.pow(1.019, document.addem.terms.value);
                var monthly = (eval((p * 0.019 *w) / (w-1))).toFixed(2);

                var myTableDiv = document.getElementById("myDynamicTable");
                var table = document.createElement('TABLE');
                var balance = p;
                table.id = "dynamicTable";
                table.border='1';
               
                var tableBody = document.createElement('TBODY');
                table.appendChild(tableBody);

                var tHeader = document.createElement('TR');
                tableBody.appendChild(tHeader);

                var columnNumber = document.createElement('TD');
                columnNumber.width='50';
                columnNumber.appendChild(document.createTextNode("Month"));
                tHeader.appendChild(columnNumber);

                var columnPrincipal = document.createElement('TD');
                columnPrincipal.width='150';
                columnPrincipal.appendChild(document.createTextNode("Principal"));
                tHeader.appendChild(columnPrincipal);

                var columnInterest = document.createElement('TD');
                columnInterest.width='150';
                columnInterest.appendChild(document.createTextNode("Interest"));
                tHeader.appendChild(columnInterest);

                var columnMonthly = document.createElement('TD');
                columnMonthly.width='150';
                columnMonthly.appendChild(document.createTextNode("Monthly DED"));
                tHeader.appendChild(columnMonthly);

                var columnBalance = document.createElement('TD');
                columnBalance.width='150';
                columnBalance.appendChild(document.createTextNode("Balance"));
                tHeader.appendChild(columnBalance);

                for (var i=0; i<terms; i++){

                    var interest = (eval(balance * 0.019)).toFixed(2);
                    var payed = (monthly - interest).toFixed(2);
                    balance = (balance - payed).toFixed(2);

                    var tr = document.createElement('TR');
                    tableBody.appendChild(tr);

                    var row = document.createElement('TD');
                    row.appendChild(document.createTextNode(i + 1));
                    tr.appendChild(row);

                    var tdPayed = document.createElement('TD');
                    tdPayed.appendChild(document.createTextNode(payed));
                    tr.appendChild(tdPayed);

                    var tdInterest = document.createElement('TD');
                    tdInterest.appendChild(document.createTextNode(interest));
                    tr.appendChild(tdInterest);

                    var tdMonth = document.createElement('TD');
                    tdMonth.appendChild(document.createTextNode(monthly));
                    tr.appendChild(tdMonth);
                    

                    var tdBalance = document.createElement('TD');
                    tdBalance.appendChild(document.createTextNode(balance));
                    tr.appendChild(tdBalance);
                }

                var oldTable = document.getElementById("dynamicTable");
                if (oldTable) {
                    myTableDiv.removeChild(oldTable);
                    myTableDiv.appendChild(table);
                }else {
                    myTableDiv.appendChild(table);
                }
               
            }

            function addRow() {
         
                var myName = document.getElementById("name");
                var age = document.getElementById("age");
                var table = document.getElementById("myTableData");

                var rowCount = table.rows.length;
                var row = table.insertRow(rowCount);

                row.insertCell(0).innerHTML= '<input type="button" value = "Delete" onClick="Javacsript:deleteRow(this)">';
                row.insertCell(1).innerHTML= myName.value;
                row.insertCell(2).innerHTML= age.value;

            }

            function deleteRow(obj) {
                 
                var index = obj.parentNode.parentNode.rowIndex;
                var table = document.getElementById("myTableData");
                table.deleteRow(index);
               
            }
        </script>
    </head>
    <header>
        <div class="topnav" id="myTopnav">
            <title>PENCOOP</title>
            <a href="/contact">Contact Us</a>
            <a href="/events">Events</a>
            <a href="/services">Services</a>
            <a href="/about">Our Story</a>
            <a href="/home">Home</a>
        </div>
    </header>
    <body style="background: goldenrod">

        @yield('content')
        
    </body>
</html>