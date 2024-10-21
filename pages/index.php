<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
<?php $year = date("Y"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>E1 PROFILING</title>
  <link rel="apple-touch-icon" sizes="76x76" />
  <link rel="icon" type="image/png" src="../LogoPDRM.png" />

  <!-- Bootstrap -->
  <link href="../gentelella-master/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../gentelella-master/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../gentelella-master/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="../gentelella-master/vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../gentelella-master/build/css/custom.min.css" rel="stylesheet">

  <style type="text/css">
    #particles-js {
      width: 100%;
      height: 100%;
      background-image: url("../img/end.png");
      background-size: 100%;
      background-position: 50% 50%;
      position: fixed;
      top: 0px;
      z-index: 1;
    }

    .btn-indigo {
      color: #f8f8f8;
      background-color: #3E50B4;
      border-color: #3949a2;
    }

    .btn-indigo:hover {
      color: #fff;
      background-color: #5869c9;
      border-color: #3949a2;
    }

    div.a {
      font-family: "Times New Roman", Times, serif;
      color: #ffffff;
      font-size: 20px;
    }

    .footer {
      position: fixed;
      left: 0;
      bottom: 10px;
      width: 100%;
      text-align: center;
      color: #fff;
    }

    .jata {
      position: fixed;
      width: auto;
      height: 170px;
      margin-top: 50px;
      left: 25%;
    }

    .logo_sistem {
      position: fixed;
      width: auto;
      height: 170px;
      margin-top: 50px;
      right: 25%;
    }

    .form_main {
      margin-top: 250px;
      width: 50%;
      text-align: center;
      color: #fff;
    }
  </style>
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body id="particles-js">

  <img id="logo" class="jata" src="../img/jata2.png">
  <img id="logo2" class="logo_sistem" src="../pdrm.png">

  <center>

    <div class="form_main" id="form_main">
      <form method="post" action="login.php">
        <div class="a">E1 Profiling</div>
        <div>
          <h4 class="pull-left" style="color: white">ID Pengguna</h4>
          <input type="text" class="form-control" name="username" placeholder="ID Penguna" required="" value="<?php if (isset($_COOKIE["member_login"])) {
                                                                                                                echo $_COOKIE["member_login"];
                                                                                                              } ?>" />
        </div>
        <div>
          <h4 class="pull-left" style="color: white">Katalaluan</h4>
          <input type="password" class="form-control" name="password" placeholder="Katalaluan" required="" value="<?php if (isset($_COOKIE["password"])) {
                                                                                                                    echo $_COOKIE["password"];
                                                                                                                  } ?>" />
        </div>
        <div class="pull-left"><input type="checkbox" name="remember" id="remember" <?php if (isset($_COOKIE["member_login"])) { ?> checked <?php } ?> />
          <label style="color: white;margin-top: 20px;" for="remember-me">Remember Me</label>
        </div>
        <div style="margin-top: 20px;" class="pull-right">
          <button type="submit" class="btn btn-indigo" name="submit"><span class="fa fa-key"></span> Log Masuk </button>
        </div>
      </form>
    </div>
  </center>

  <center>
    <div style="width:50%">
      <table id="example1" class=" table  table-border dataTable no-footer" role="grid" aria-describedby="example1_info">
        <thead>
          <tr role="row">
            <th style="width: 1%" class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending">No</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Nama Penuh: activate to sort column ascending">Nama Penuh</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Nama Pengguna: activate to sort column ascending">Nama Pengguna</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Jawatan: activate to sort column ascending">Jawatan</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Jenis Pengguna: activate to sort column ascending">Jenis Pengguna</th>
          </tr>
        </thead>
        <tbody>





          <tr role="row" class="odd">
            <td class="sorting_1">1</td>
            <td>Sahabu Bin Male (P.Pendaftar)</td>
            <td>sahabu_pendaftar</td>

            <td>PEGAWAI PENDAFTAR</td>
            <td>
              Pegawai Pendaftar </td>


          </tr>
          <tr role="row" class="even">
            <td class="sorting_1">2</td>
            <td>Ramkarpal Singh a/l Karpal Singh (KU)</td>
            <td>ramkarpal_ku</td>

            <td>KETUA UNIT</td>
            <td>
              LAIN-LAIN </td>


          </tr>
          <tr role="row" class="odd">
            <td class="sorting_1">3</td>
            <td>Nik Mohamad Abduh Bin Nik Abdul Aziz (P.Siasatan)</td>
            <td>nik_risik</td>

            <td>PEGAWAI SIASATAN</td>
            <td>
              Pegawai Siasatan </td>


          </tr>
          <tr role="row" class="even">
            <td class="sorting_1">4</td>
            <td>Mastura Binti Tan Sri Dato Mohd Yazid (Pengarah)</td>
            <td>mastura_pengarah</td>

            <td>PENGARAH</td>
            <td>
              Pengarah </td>


          </tr>
          <tr role="row" class="odd">
            <td class="sorting_1">5</td>
            <td>Administrator</td>
            <td>zahidi_admin</td>

            <td>ADMINISTRATOR</td>
            <td>
              Administrator </td>

          </tr>
        </tbody>
      </table>
    </div>
  </center>
  <div class="footer">

    <strong>Hakcipta &copy; <?php echo $year; ?> <u><a style="color: #ffffff" href="http://www.prismakhas.com/">Prismakhas Sdn Bhd</a></u></strong> Hak cipta terpelihara.
  </div>
  <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>-->
  <script type="text/javascript">
    $.getScript("js/particles.min.js", function() {
      particlesJS('particles-js', {
        "particles": {
          "number": {
            "value": 100,
            "density": {
              "enable": true,
              "value_area": 1000
            }
          },
          "color": {
            "value": "#ffffff"
          },
          "shape": {
            "type": "polygon",
            "stroke": {
              "width": 2,
              "color": "#ffffff"
            },
            "polygon": {
              "nb_sides": 0 //for star shape
            },
            "image": {
              "width": 100,
              "height": 100
            }
          },
          "opacity": {
            "value": 0.5,
            "random": false,
            "anim": {
              "enable": false,
              "speed": 1,
              "opacity_min": 0.1,
              "sync": false
            }
          },
          "size": {
            "value": 5,
            "random": true,
            "anim": {
              "enable": false,
              "speed": 40,
              "size_min": 0.1,
              "sync": false
            }
          },
          "line_linked": {
            "enable": true,
            "distance": 150,
            "color": "#39697a",
            "opacity": 1,
            "width": 2
          },
          "move": {
            "enable": true,
            "speed": 6,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "attract": {
              "enable": false,
              "rotateX": 600,
              "rotateY": 1200
            }
          }
        },
        "interactivity": {
          "detect_on": "canvas",
          "events": {
            "onhover": {
              "enable": true,
              "mode": "repulse"
            },
            "onclick": {
              "enable": true,
              "mode": "push"
            },
            "resize": true
          },
          "modes": {
            "grab": {
              "distance": 400,
              "line_linked": {
                "opacity": 1
              }
            },
            "bubble": {
              "distance": 400,
              "size": 40,
              "duration": 2,
              "opacity": 8,
              "speed": 3
            },
            "repulse": {
              "distance": 200
            },
            "push": {
              "particles_nb": 4
            },
            "remove": {
              "particles_nb": 2
            }
          }
        },
        "retina_detect": true,
        "config_demo": {
          "hide_card": false,
          "background_color": "#b61924",
          "background_image": "",
          "background_position": "50% 50%",
          "background_repeat": "no-repeat",
          "background_size": "cover"
        }
      });
    });
  </script>
</body>

</html>