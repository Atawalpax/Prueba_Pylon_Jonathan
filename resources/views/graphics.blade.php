<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Jonathan</title>
    
    <style> 

        body {
            font-family: 'Poppins', sans-serif;           
        }

        /* header */

        #header {
            padding: 2em 0 2em 0 ;
            background-color: #5c70fc;         
            text-align: center;
            color: white;
            font-family: 'Poppins', sans-serif;                    
	    }        
        
        /* footer */

        #footer {
            padding: 1em 0 1em 0 ;
            background-color: #d8dcf7;
            color: black;  
            font-family: 'Poppins', sans-serif;
            position: absolute;
            bottom: 0;
            width: 100%;
	    }  

        #footer .name{
            text-align: left;
            padding: 10px 10px 10px 10px;
            margin-left: 20px;
        }
                
        /* Main */

        .title{
            background-color: #F4F4F4;
            color: #0423fc;
            text-align: center; 
            font-family: 'Poppins', sans-serif;
            padding: 20px;
            margin-top: 15px;         
        }

        .main{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 100%;  
            text-align: left;    
            font-family: 'Poppins', sans-serif;     
        }

        /*Tabla*/ 

        .table{
            width: 100%;
            margin-top: 20px;
        }

        .table, th, td {
            border: 2px solid;
            border-color: #D2D0D0;
            border-collapse: collapse;
            padding: 10px; 
            text-align: center;            
        }

        .th{
            color: #0423fc;
            background-color: #F4F4F4;
        }   

        .year{
            background-color: #0423fc;
            color: white;
            padding: 10px;
        }

        /*Prices*/

        .prices{
            border-radius: 25px;
            background-color: #0423fc;
            color: white;
            padding: 20px;          
            line-height: 60%;
            width: 70%;
            margin: auto;
        }

        .column {
            float: left;
            width: 50%;
            box-sizing: border-box;   
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /*Button*/

        .btn{
            width: 100px;
            height: 45px;
            color: black;
            font-weight: bold;
            background-color: #3befd8;
            padding: 5px;
            border-radius: 5px;           
        }
        
    </style>
</head>
<body>


    <!-- Header -->

    <section id="header" >
        <h1>Pylon</h1>  
    </section>

    {{-- Main Tabla--}}

    <div class="title">
        <h1>FINANCIACIÓN PPA</h1>                 
    </div>
    
    <div class="main">
        <p >La tabla siguiente muestra de forma orientativa la evolución económica de la instalación si se decidiese seguir un modelo PPA según el indicado:</p>                    
        <div class="prices">
            <div class="row">  
                <div class="column">
                    <h3 style="font-weight: lighter;">Precio actual energía:</h3>
                    <h3 style="font-weight: lighter;">PRECIO FIJO:</h3>
                    <h3 style="font-weight: lighter;">IPC ENERGÍA:</h3>
                    <h3 style="font-weight: lighter;">PLAZO:</h3>
                </div>  
                <div class="column">
                    <h3>0,1856 €/kWh</h3>
                    <h3>0,0795 €/kWh</h3>
                    <h3>1,20%</h3>
                    <h3>0 años</h3>
                </div>               
            </div>           
        </div>
                     
        <div>
            <table class="table">
                <tr>
                    <th></th>
                    <th class="th">Ahorro</th>
                    <th class="th">Coste PPA</th>
                    <th class="th">O & M</th>
                    <th class="th">Flujo de caja</th>
                    <th class="th">Acumulado</th>
                </tr>
                @foreach ($ppaData as $key => $ppa)               
                    <tr>
                        <td class="year">
                            Año {{ $key + 1}}
                        </td>
                        <td>
                            {{number_format($ppa->savings, 2)}} €
                        </td>
                        <td>
                            {{($ppa->ppa_cost)}} €
                        </td>
                        <td>
                            {{($ppa->operating)}} €
                        </td>
                        <td>
                            {{number_format($ppa->cashflow, 2)}} €
                        </td>
                        <td>
                            {{number_format($ppa->accumulated, 2)}} €
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>       
    </div>
        
    {{-- Footer --}}
    <section id="footer">   
        <p class="name">pylondata.com</p>  
    </section>
</body>
</html>




