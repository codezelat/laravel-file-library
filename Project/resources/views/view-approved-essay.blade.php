<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <style>
      .wf-force-outline-none[tabindex="-1"]:focus {
        outline: none;
      }
    </style>
    <meta charset="utf-8" />
    <title>SITC Digital Library Document #{{ $essay->id }}</title>
    <meta content="Assignment" property="og:title" />
    <meta content="Assignment" property="twitter:title" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9
      ]><script
        src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"
        type="text/javascript"
      ></script
    ><![endif]-->
        <link rel="icon" href="https://sitc.lk/wp-content/uploads/2021/11/cropped-cropped-photo_2021-11-23_18-40-47-32x32.png" sizes="32x32">
    <link rel="icon" href="https://sitc.lk/wp-content/uploads/2021/11/cropped-cropped-photo_2021-11-23_18-40-47-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="https://sitc.lk/wp-content/uploads/2021/11/cropped-cropped-photo_2021-11-23_18-40-47-180x180.png">
    <script type="text/javascript">
      !(function (o, c) {
        var n = c.documentElement,
          t = " w-mod-";
        (n.className += t + "js"),
          ("ontouchstart" in o ||
            (o.DocumentTouch && c instanceof DocumentTouch)) &&
            (n.className += t + "touch");
      })(window, document);
    </script>
  </head>
  <body cz-shortcut-listen="true">
    <div class="section wf-section">
      <div class="container w-container">
      <a href="../">
        <img
          src="{{ asset('images/621cbcc617ee437d60b1c2e9_photo_2021-11-23_18-40-47.png') }}"
          loading="lazy"
          sizes="170px"
          srcset="
            {{ asset('images/621cbcc617ee437d60b1c2e9_photo_2021-11-23_18-40-47-p-500.png') }}  500w,
            {{ asset('images/621cbcc617ee437d60b1c2e9_photo_2021-11-23_18-40-47.png') }}       1040w
          "
          alt=""
          class="image"
          width="150"
        />
        </a>
      </div>
    </div>
    <div class="section-2 wf-section">
      <div class="w-container">
        <h1 class="heading">#1 Digital Library In Sri Lanka ????????</h1>
      </div>
    </div>
    <div class="section-3 wf-section">
      <div class="w-container">
        <div class="w-row">
          <div class="column w-col w-col-8 w-col-stack w-col-tiny-tiny-stack">
            <h1 class="heading-4">Project Name</h1>
            <h2 class="heading-5">St. Id.: {{ $essay->student_id }}</h2>
            <h2 class="heading-5">St. Name: {{ $essay->student_name }}</h2><br><br><br>
            <iframe src="https://drive.google.com/file/d/{{ $essay->file_code }}/preview" frameborder="0" width="100%" height="550" allow="autoplay"></iframe>
            <a href="../" class="button addafile w-button">Back</a
            >
          </div>
          <div class="column-2 w-col w-col-4 w-col-stack w-col-tiny-tiny-stack">
            <a href="../add-document/" class="button addafile w-button">Publish Your Project</a
            ><a href="https://youtu.be/merAXmyQ9Zs" class="button addafile _2 w-button"
              >How To Publish Your Project</a
            ><img
              src="Assignment_files/621ce67100297d78f3a155fa_photo_2022-02-28_18-49-20.jpg"
              loading="lazy"
              sizes="(max-width: 991px) 100vw, 290px"
              srcset="
                Assignment_files/621ce67100297d78f3a155fa_photo_2022-02-28_18-49-20-p-500.jpeg  500w,
                Assignment_files/621ce67100297d78f3a155fa_photo_2022-02-28_18-49-20-p-800.jpeg  800w,
                Assignment_files/621ce67100297d78f3a155fa_photo_2022-02-28_18-49-20.jpg        1080w
              "
              alt=""
              class="image-3"
              width="300"
            /><img
              src="Assignment_files/621d78f283229f68f3529eef_photo_2022-02-28_20-44-35.jpg"
              loading="lazy"
              sizes="(max-width: 991px) 100vw, 290px"
              srcset="
                Assignment_files/621d78f283229f68f3529eef_photo_2022-02-28_20-44-35-p-500.jpeg  500w,
                Assignment_files/621d78f283229f68f3529eef_photo_2022-02-28_20-44-35-p-800.jpeg  800w,
                Assignment_files/621d78f283229f68f3529eef_photo_2022-02-28_20-44-35.jpg        1080w
              "
              alt=""
              class="image-3"
              width="300"
            />
          </div>
        </div>
      </div>
    </div>
    <div class="section-4 wf-section">
      <div class="w-container">
        <div class="columns w-row">
          <div class="column-4 w-col w-col-4 w-col-tiny-tiny-stack">
            <img
              src="{{ asset('images/621d7d07ca76745ba5249f59_Untitled-1.png') }}"
              loading="lazy"
              sizes="(max-width: 479px) 200px, (max-width: 767px) 26vw, 200px"
              srcset="
                {{ asset('images/621d7d07ca76745ba5249f59_Untitled-1-p-500.png') }} 500w,
                {{ asset('images/621d7d07ca76745ba5249f59_Untitled-1-p-800.png') }} 800w,
                {{ asset('images/621d7d07ca76745ba5249f59_Untitled-1.png') }}       836w
              "
              alt=""
              class="image-4"
              width="150"
            />
          </div>
          <div class="column-5 w-col w-col-4 w-col-tiny-tiny-stack">
            <ul role="list" class="w-list-unstyled">
              <a href="../"><li class="list-item">Home</li></a>
              <a href="https://sitc.lk/privacy-policy/"><li class="list-item">Privacy Policy</li></a>
            </ul>
          </div>
          <div class="column-3 w-col w-col-4 w-col-tiny-tiny-stack">
            <a href="https://www.facebook.com/sitc.campus/" style="width:100%; text-align:center;" class="social w-button"><i class="fas fa-thumbs-up"></i>&nbsp;&nbsp;&nbsp;Facebook</a
            ><a href="https://www.youtube.com/channel/UCLatD85fttdOLDxFJnCbXyQ" style="width:100%; text-align:center;" class="social w-button"
              ><i class="fas fa-heart"></i>&nbsp;&nbsp;&nbsp;Youtube</a
            >
          </div>
        </div>
        <h4 class="heading-3">
          Made With <i class="fas fa-heart"></i> By
          <a href="https://codezela.com/"
            ><strong class="bold-text">Codezela Technologies</strong></a
          >
        </h4>
      </div>
    </div>
    <script src="https://kit.fontawesome.com/35b7a7705f.js" crossorigin="anonymous"></script>
    <script
      src="Assignment_files/jquery-3.js"
      type="text/javascript"></script>
    <script src="Assignment_files/webflow.js" type="text/javascript"></script>
    <!--[if lte IE 9
      ]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script
    ><![endif]-->
  </body>
</html>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>
