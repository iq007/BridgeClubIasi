<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php';?>

</head>


<body >
<?php include 'menu.php';?>



<div id="br_concurs_noutati" class="container" role="main">
    <div class="jumbotron">
        <p>Bridge Club Iasi va invita la Memorialul "Grigore Alexandrescu" care va avea loc in perioada 17 Aprilie - 19 Aprilie 2015 la motel Bucium, sub patronajul Federatiei Romane de Bridge.</p>
        <p>&nbsp;</p>
        <div id="br_concurs_info" class="well" style="display: block; text-align: center">
            <div class="row">
                <div class="col-md-3">
                    </br><a href="#"><i class="fa fa-info fa-lg" onClick="toggle('br_concurs_details_info');"> Informatii concurs </i></a></br></br>
                </div>
                <div class="col-md-3">
                    </br> <a  data-toggle="modal" href="#" data-target="#form-content"><i class="fa fa-bed fa-lg"> Rezervari cazare </i></a></br></br>
                </div>
                <div class="col-md-3">
                    </br> <a href="#"><i class="fa fa-user-plus fa-lg" onClick="toggle('br_perechi_info');"> Inscrieri perechi </i></a></br></br>
                </div>
                <div class="col-md-3">
                    </br><a href="#"><i class="fa fa-users fa-lg" onClick="toggle('br_echipe_info');"> Inscrieri echipe </i></a></br></br>
                </div>
            </div>

        </div>
        <div class="row">
            <div id="thanks"></div>
        </div>
    </div>
        <div id="br_concurs_details_info" class="well" style="display: none";>
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-info"  style="text-align: center">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-info fa-lg"> Program </i></h3>
                        </div>
                        <div class="panel-body">
                            <b>Vineri,  17 Aprilie</b></br>16.00 - Perechi Open - Sesiunea I</br>20.30 - Perechi Open - Sesiunea II</br></br>
                            <b>Sambata, 18 Aprilie</b></br>9.30 - Echipe Danez - Rundele I-IV</br>15.30 - Echipe Danez - Rundele V-VIII</br>
                                21.00 - Cine festiva oferita de organizator</br></br>
                            <b>Duminica, 19 Aprilie</b></br>10.00 - Echipe Danez rundele 9-11 divizia B si divizia C</br>
                            10.00 - Echipe Danez Semifinale divizia A - loc I cu loc IV ; loc II cu loc III</br>
                            11:30 - Finala mica - Pierzatoarele din semifinale</br>
                            11:30 - Finala mare - Castigatoarele din seminfinale
                            </br>13.30 - Festivitatea de premiere</br>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-info"  style="text-align: center">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-trophy fa-lg"> Premii </i></h3>
                        </div>
                        <div class="panel-body">
                            <b>Open</b></br>I - 2500 RON + Cupe</br>II - 1500 RON + Cupe</br>III - 1000 RON + Cupe</br>IV - 700 RON</br>V - 500 RON</br>VI - 300 RON</br></br>
                            <b>Echipe</b></br>IA - 4000 RON + Cupe</br>IIA - 2400 RON + Cupe</br>IIIA - 1200 RON + Cupe</br>IB - 700 RON</br>IIB - 500 RON</br>IC - 500 RON</br></br>
                            <b>Premii speciale</b></br>Loc 1 tur 2 nepremiat - 300 RON</br>Cea mai bine clasata axa ieseana nepremiata - 250 RON</br></br>
                            <b>Premiile nu sunt conditionate de numarul de participanti!</b>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel panel-info"  style="text-align: center">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-sign-in fa-lg"> Taxe concurs </i></h3>
                        </div>
                        <div class="panel-body">
                            <b>Perechi Open</b> 160 RON / axa</br></br>
                            <b>Echipe Danez</b> 400 RON / echipa</br></br>


                        </div>
                    </div>

                    <div class="panel panel-info"  style="text-align: left">
                        <div class="panel-body">
                            <p>Inscrierile se fac telefonic la numarul <a href="tel:0726745146">0726 745 146</a> până la data de 14.04.2014 sau <a href="http://www.iasi.bridge-club.ro/" target="_new">http://www.iasi.bridge-club.ro/</a>
                            </p>
                            <p>Confirmarile se sisteaza cu 60 de minute inainte de inceperea
                                fiecarui concurs.
                            </p>
                            <p>La concursul Perechi OPEN se vor folosi done predistribuite.
                            </p>
                            <p>In sala de concurs, FUMATUL ESTE INTERZIS !
                            </p>
                            <p>Manager Turneu: Olteanu Romeo</br>
                                Director Turneu: Damboianu Calin</br>
                                Arbitru: Craciun Adrian</br>
                                Arbitu: Ghergheli Carol
                            </p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



<div id="form-content" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="form-content" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close" data-dismiss="modal">×</a>
                <h3>Rezervare cazare</h3>
            </div>
            <div class="modal-body">
                <form class="contact" name="contact">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="label" for="name">Nume</label></br>
                            <input type="text" name="name" class="input-xlarge" required="true">
                        </div>
                        <div class="col-md-6">
                            <label class="label" for="email">E-mail</label></br>
                            <input type="email" name="email" class="input-xlarge" required="true">
                        </div>
                        <div class="col-md-6">
                            <label class="label" for="telefon">Telefon</label></br>
                            <input type="text" name="telefon" class="input-xlarge" required="true"><br></br>
                        </div>
                        <div class="col-md-6">
                            <label class="label" for="datepicker">Perioada</label><br>
                            <div class="input-daterange input-group" id="datepicker" required="true">
                                <input type="text" class="input-sm form-control" name="start" />
                                <span class="input-group-addon"> - </span>
                                <input type="text" class="input-sm form-control" name="end" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="label" for="message">Optiuni cazare</label></br>
                            <select name="optiunecazare" class="input-xlarge">

                                <?php
                                    /*try {
                                        $datas = $database->select("optiunicazare", "*");
                                        foreach ($datas as $data) {
                                            echo "<option>" . $data['Hotel'] . " - " . $data['Camera'] . " (" . $data['Pret'] . " " . $data['Valuta'] . ") </option>";
                                        }
                                    }
                                    catch(Exception $e){
                                        echo ("Exception");
                                    }*/

                                ?>

                            </select>
                            </br>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <input class="btn btn-success" type="submit" value="Trimite" id="trimite">
                <a href="#" class="btn" data-dismiss="modal">Inchide</a>
            </div>
        </div>
    </div>
</div>




<?php include 'footer.php';?>

</body>
</html>