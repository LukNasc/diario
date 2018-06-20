<?php session_start();?>
<!DOCTYPE html>
<html>
<?php require_once('includes/head.php'); ?>
<body>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12">
                <?php require_once("includes/titulo.html");?>
            </div>
            <!-- col-md-12 -->
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-md-4 padding0 heigth100">
                <?php require_once("includes/menu.php");?>
            </div>
            <!-- col-md-4 -->
            <div class="col-md-8 branco">
                <div class="row">
                    <div class="col-md-12">
                        <div class="caixa">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="img/programação.jpg" alt="Imagem" class="img">
                                </div>
                                <!-- col-md-4 -->
                                <div class="col-md-8">
                                <h2>O que eu espero pro meu futuro?</h2>
                                    <p>
                                        Bom, eu tenho apenas 17 anos de idade, ainda sou muito jovem, mas cheio de sonhos.
                                        Quando eu era menor eu queria ser médico, astronauta, dentista, mas foi no 1º ano do
                                        ensino médio que o meu pensamento iria mudar, quando entrei no curso de informática e
                                        começou realmente a parte de programação, foi onde eu comecei a me apaixonar pela área.
                                        Foi quando eu percebi que era aquilo que eu queria e quero pra minha vida. Como eu disse, eu
                                        pretendo primeiramente fazer um bom estágio onde eu irei estagiar (GFX Consultorias), não
                                        estou preocupado em ser o melhor dos estágiários, e sim dar o meu melhor e buscar aprender cada vez mais,
                                        e eu desejo também fazer uma faculdade de ADS ou Sistema da Informação e ser um profissional exemplar, e um dia ainda pretendo
                                        viajar o mundo todo, e ser reconhecido pelo meu trabalho. 
                                    </p>
                                    <!-- p -->
                                </div>
                                <!-- col-md-8 -->
                            </div>
                            <!-- row -->
                        </div>
                        <!-- caixa -->
                    </div>
                    <!-- col-md-12 -->
                </div>
                <!-- row -->
                <div class="row">
                   <div class="col-md-12">
                        <h1 class="h1">Metas e Objetivos</h1>
                    </div>
                   <!-- col-md-12 -->
                   <div class="col-md-5">
                       <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUSEhIVFRUVFRUWFRcVFhUVFRUXFRgYGBUVFRUYHSggGBolHRUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGBAPGC0dHSUtKy0tLSsrLS0rLS03LTctKy0tLS0tLTctLSsrLSsrKy03Ky0tKysrKysrLSstKysrK//AABEIALcBEwMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAABQIDBAYHAQj/xABBEAACAQIDBQQGBQsEAwAAAAAAAQIDEQQFIQYSMUFRBxNhcSIygZGhsRRSU7LRIzRCYnJzgpKiweEkM8LwVGPx/8QAFQEBAQAAAAAAAAAAAAAAAAAAAAH/xAAWEQEBAQAAAAAAAAAAAAAAAAAAEQH/2gAMAwEAAhEDEQA/AO4gAAAAABTOSSbbSS1beiS6tgVGPj8bTowdSrJRjHi38ElzfgQk9tsGp7m/J+Ki7fj8DnG2+1csVO0W40ov0I9X9eXj8gN1q9o1BOypSa5NtJ+7UmMo2rw+I0T3JdJW+DOBd+2ySyzEtNO7A+iAalsln+9BQqS8E3y8H4G2gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAI2efYVS3XXp3/aXz4GudpG0f0en3MHadRek+aj0838jjdfMZN6N3b0sB9KQxEHHfU4uNr7yacbLxOW7d7WuvLuKLfd3tpxqPk/Lovb5avHH1KFJwc5b07OSUnZW1UfEx6DcI97L15L0f1Yvn5v5eYFdSapRaveT9Z8vJeHzITEV7s9xNZtmOgLkWZVHEbrtzMKc7IwqOK/KXfIDfMpzPcdr6ridI2c2julGbuviv8HAMkxcpPe1d3d+03TK8XVi04xb8rP4cQO8RkmrrVM9NS2Vz1StCTt58mbaAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADDzbMIYelKrPhFaLq+SMw5b2p55efcRekPW8ZPj7uHvA0PafNp16sqk3dyd/wAEvBFjJaO6niJ8m1TXV85+zgvHyMGjQlWqKC05yf1Yri/+82S2NvNqlSVklZdIxXNvoBZw672blPWENZeLfqx9vyTKcxxrk22y/UlGEe7hwXF/Wb4t/wDeRDYmQFMplMqti3OdiPxeI5LVgVY3GeJZwVGVR34R69fIzcDkrl6dX2R6eZL90ktAMXD09xWVlbgSmX4uV+JhqnczsFQsBtWX5jJWd9evM3TBbT1bK9pea/ujm+HnYm8NmCSVwOlYLaCnP1k4v3olaVSMleLTXVanKambpcOpJZVtC4TTT4uzXJ+aA6OCzhcQqkVKPB/DwLwAAAAAAAAAAAAAAAAAAAAAAAAGDneYxw9GdWX6K0XWT9Ve8+f81q1K9R2TlKTbb8+bZ0TtAzTv6v0eD9Cn63Rz538uHvNPkrejD2voBayrLVCLSd2/Xn1fReCLOPxMYrcp8+L5sqzDHqMdyHLTx82ROHTk7gV1NERlZknXiYtXDXXGwERLenLdgrv4LzZJYDLY0vSl6U+vTyRfpqMFaKt834stzrXYF6pVLcE2yiCuZuHpAV4agS2Gwuh5hMOSEVYCNzKfdxXWT0XguP8AYwni31JPZrKXmuLqU1U7ulRp6TUd5t7yXC60bcnf9VG54bsmppp1MXUkuajCMG/a3IDn0cWopuT0Raw2Ztve4K+i8DM7Qtiq+Cn3icquGb9GdtabfCNRLRdFLg/B6Gp0a4Hati9pFpCT0/7w8ToUJJq6d0z5uyzHuLTTsdb2E2glVtSlr0A3cAAAAAAAAAAAAAAAAAAAAAAAHDZOUnKK9Ztym3wWuiuR+ZYpQ9GPv5svZrj4004Q66vm31bNfpU51JXfAC5Gm5P4+8y5JRVl/wDRKShojDr1wKpSuyxVqWLNXFckYzqAXZVGyqJauXKKAy8PTuyWwmHuzFwVMnMBC2oFySUVbnY17Pc1aTpU36T0k1+iunm/gdKyHY76TTdarUlBTTVNQspdN9trh4fEw6PY+lO8sVeF7u1P0n75WT8dQNR2aq18LhJ4ihN03OvTpXSWqhCpOS1X60C9LbDMP/Kqf0/gbp2hZTSwuBoUaMbQjWvrq23Cd23zbOcd2BmYjajHzi4yxNSUZJqUXutNPimrao1uOA1Jnui7ToAY2By42/IZSo6wk4vhdPUi8LCxKUGBPRziv9rP3l2ObV/tZ+9kTTZfgwJaGaVvtJ+9l+GZ1PtJe9kTBl2LAl1mVT68vew8wqfXl72RsWV7wGXLH1Pry/mZSsdU+0n/ADMxGzy4GZ9MqfaT/mZLZBXlKUt6Tei4tvmQMWTOzb9OX7P9wNgAAAAAAAAAAHzWqTqSvLhcy6k4wVlxFSoo3tYiMTibtsBXxGph1699EWK1RtikuoFbVijeFSZauBl0dSRw1G5HYYncJADKwdOxuGyWTfSam69KcVvVLcWuUV0vZ+xM1ejE63sHge7wqlzqtyflwj8r+0DYacFFKMUkkkkloklwSKgANI7WF/pqX75fcmcwjE6f2r/m1L98vuTOS5tjJUaTnFJu6Wt7a+QGfGBkU6ZrmHzHHSipQw8Gmrp34p+czPzfOZUFTiqalWqJejyi3ZcuPpOyXgCJ+jEzaRrGV43HKrCFfDx3Jtrfh+ho36VpS6W1txMfG5/j6Kc54anGCdt53fF2XCYG802U4/MKdCnKrVluwj723wSXNvoapk+d5hVlSk8LDuZyjea0tBvWSvPpfkY23GeKNeNJUKVbuoqb7xTkoyl+rGSXDd439b3xY3rKcwjXpxqwjNRl6u/HdbX1kuj5PmZ8WRuS45V6FOstN+Cduj4Sj7GmvYQOfbZSp1vouEo99WvZ8XGMrX3UlrJrnqkuujtUbrFlSZz+W0Ob0F3lfAwnTSu1T9ZL+GpO3uJTbnaargqVKpShCTqOV1UUnZKKem61rqBtoIjPs/p4Sgq1RXbsoQXGcmr2V+Csm2+iNVo7R5zWj31HBU+6esU03KS6q9SMpeDUdeQHQ4smdm3+Ul+x/dGgbG7Wxxu9CUO7rQ1lC7acb2co31Vno0+F0b7s6/yr/YfzQGyAAAAAAAAAAD5kxmI1fmyNnK5XXnq/NmPOQFD4hzLcpHikB7JiKCRep0wL+FWpsGDWhD4eBMYTkgNi2dy3v69OnylL0rfVSvK3sTOz0qajFRirKKSS6JaJHNuzql/qU+kJv5R/5HTAAAA0vtU/Nqf75fcmca2o/N3+1H5nZu1P82p/vl9yZx7P8PKpRcYR3pb0XZW5PXiBjZTVx3d01ClTdO0bNtX3er9PjbwJHabI519ypSdqkOCbtdXurPlJP5kfgsXjadOMI4VNRikm2ru3X0iSxuLxsJQnTpRqQdOO/DS8Z6uVne/NLnwIrFyfaWrCrHD4uFpNqKlbdactI7y4NN/pIlNul/o5/t0/voiaeXYrGYmnVr0lRp09125vde9ZLi23zdlYn9r8JUrYWUKUXOTlBpK17KSb4gZGy01HBUZSdkqV2+iV22ans7OhiHjK2IrU6cq6lTgqk4RlFT1uk3wVqaT/AFCaxWExEcshQhSk6soRpyit28Yt+nfW3DT+IuZPsVhu5p9/RbquKc/ylRWk9XG0ZW0vbToBY7Lse3TqYd8act+PNbs/WSfO0k3/ABmN2VpSq4mpP/ctDV8VvynKfvcV7i/gMhrYTMozoUpPDSW62ndRjKOqblK7tOKl5HmYbP4zCYmWKwCU4zbcqba03neUXFtb0b6qzuuHmF3N9s8dhvSrYKMItyUW5+tbXk3yKO12d8Ph31c374IwdoaOZ5hGFOWD7tRbd77qu1a7c5cPJNk12j5PXxFChChTdRwct7dcdLwST1a5oCM7UneeDhJ+g4Tv7XTTfu+Z06KS0WiWi8EuBqe2ezTxtCChZVaXq73CSaSnBvleyd+sSKw2dZzTpqk8FvzS3VUevDROW7Ldk/G6QFjJVu5/WUODdW9vGEZS/rOwbPP8r/C/7HN9hdmKtCVTFYp3xFW+l091Se9Nya0cm0uGitodF2f/AN5eTKa2kABAAAAAAAAHyfWnq/N/MxpSKqstX5stSYHkmewPEXKaArgjMw8LmPTiSWFogVU4EtgImCoEhh5JWA3zs4l/qpLpRl96B0o5R2dV7Y1J/pQnH/kvus6uAAAGl9q35rT/AH0fuTOWxqnTu1uVsJT/AH8fuVDk6qASdOsZVKoQsa5lUcSBN05mTTZGUK5IUZAZcC7EswL0QLkS4i2i4mBWipFCKooCtFSZSj1AVpkpkD/LR8pfIi4klkL/AC0P4vusDbQAAAAAAAAAB8i1Hq/NlBVU4vzYUQEUXYo8US7GIF6hElcMiPw8TPpMC/YoqYi2hROrZGHKd2BL4HNJQnGpBuM4NOL8UdcyLtBwtZJVX3M+e9rBvwly9tvacUwsEXqrtqgO44zbrAU+NbefSEJy+NrfEgsb2r4aP+3QrT892C992/gcrdd9S1KYG0bY7f8A06lGl9H7pRqKd9/ebtGUbW3V9b4GmSxDv0L0rFuME2B5Co+rMyjU8Sz3di5uPiBn0a7RM5ViN+UYvS7Su+HwNcjO3K7JbKZveT1WvJX+AHSKOyNVpPvKbT1Vt78C8tkqv2kP6vwNhyGMlQhvcbePDlxJADUlspU+0h7mVrZWf2kfczagBq62Wl9pH3P8SpbLy+1X8r/E2YAa2tmH9qv5f8lS2Zf2v9P+TYgBr62b/wDb/T/kycDkndzU+8va+m7birdSXAAAAAAAAAAAAfI01q/NlSR61q/NnoHqRcgUWK4oDKpMyYSMSnIvRYFdVmNHiX5mPvagSFHgVzRi0pMvKTAtTkWmzInG573GgGJO5VQVi5Kn18y/g8PvNKMW3y63fCyAzcPRukrE7l2y9fENRp03u85vSC/ifyRt2xexG6o1sVHXRxpv5zX9vf0OgRikrJWS4JcAOdYLsvjfeq1vZCP/ACf4G2ZXsthaFtyndr9KfpP3cPgTQAAAAAAAAAAAAAAAAAAAAAAAAA+SmtX5lQlHV+bKowA8ii4kVRgXY0wKYl2JXCiZuFy+UmkotvovkBhWKY0jess7PsXVs3Du49ajt/T63wNsy/swoRt3tWc3zUUoL43YHJ8PhmTmC2WxVVXhQqNPm47qftdkdmyzZ/C4e3dUYxa/Sa3pfzSuyTA45hezfGS9ZQh5zT+7cnsF2Z/a1kuqhG/xdre46KANUw/Z5l8V6VKVR9ZTl8otImsuyLDYfWjQpwdrbyit637T1JEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHyw8K7vTm+hdjhn0+QAF6ngn0+RmUMvbfD5AAb3s92eVJ2nWapwetk1KbXhbRe33HRsryahh0lSpxj+ta8n5y4gAZ4AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP/2Q==" alt="" class="img">
                   </div>
                   <!-- col-md-5 -->
                   <div class="col-md-7">
                       <h2>Fazer um bom estágio</h2>
                       <p>
                           A primeira meta em minha lista é fazer um bom estágio. Estou preocupado em fazer o meu melhor na empresa que eu vou estagiar,
                           espero que eu consiga agradar ao meu supervisor e aos meus 'colegas de trabalho', sei das dificuçdades que eu posso enfrentar, pois vou ter que lidar
                           com algumas coisas que eu não estou muito acostumado. 
                       </p>
                   </div>
                   <!-- col-md-7 -->
                   <div class="col-md-7">
                       <h2>Conseguir um bom emprego</h2>
                       <p>
                           Depois do estágio vou em busca de um bom emprego para que eu consiga pagar uma faculdade e poder judar nas despesas da casa
                       </p>
                   </div>
                   <!-- col-md-7 -->
                   <div class="col-md-5">
                       <img src="data:image/jpeg;base64,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" class="img">
                   </div>
                   <!-- col-md-5 -->
                   <div class="col-md-5">
                       <img src="data:image/jpeg;base64,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" class="img">
                   </div>
                   <!-- col-md-5 -->
                   <div class="col-md-7">
                       <h2>Entrar na Universidade</h2>
                       <p>
                           Juntamente com conseguir um bom emprego, eu desejo entrar em uma boa universidade. Pretendo fazer faculdade de ADS (Análise e Desenvolvimento de Softwares) ou SI (Sistema da informação),
                           ainda estou em dúvida dessas duas graduações, pretendo me tornar um grande profissional de T.I na área de prograação.
                       </p>
                   </div>
                   <!-- col-md-7 -->
                   <div class="col-md-7">
                       <h2>Formatura</h2>
                       <p>
                           Pretendo me formar n área de informática e conseguir me tornar um profissional conhecido mundialmente pelo meu trabalho.
                       </p>
                   </div>
                   <!-- col-md-7 -->
                   <div class="col-md-5">
                       <img src="http://adcampinagrande.com.br/wp-content/uploads/2016/07/FACULDADE.jpg" class="img">
                   </div>
                   <!-- col-md-5 -->
                   <div class="col-md-12">
                       <h1 class="h1">Continua...</h1>
                   </div>
                 </div>
                <!-- row -->
                   

            </div>
            <!-- branco -->
        </div>
        <!-- rowPrimary -->
    </div> 
    <!-- container -->
     <!-- modal -->
     <div class="modal fade" id="metasModal" tabindex="-1" role="dialog" aria-labelledby="metasModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="metasModalLabel">Adicione mais uma meta para a sua vida</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="controle/php/metasAdd.php?type=add" method="post">
                        <label for="nome"><b>Meta<b></label>    
                        <input type="text" name="meta" class="form-control">
                           
                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Adicionar" class="btn btn-primary">
                        </form>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Apagar</button>
                    </div>
                    </div>
                </div>
            </div>
            <!-- /modal -->
</body>
<script src="controle/js/ajax.js"></script>
</html>