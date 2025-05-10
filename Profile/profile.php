<?php
session_start();

include("../login/conn.php");

if (!isset($_SESSION['user_id'])) {
  echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
  echo "
        <script>
        Swal.fire({
            title: 'Unauthorized!',
            text: 'You must be logged in to view this page.',
            icon: 'warning',
            confirmButtonText: 'Login',
            background: '#fffbe6',
            color: '#333',
            iconColor: '#f59e0b',
            confirmButtonColor: '#2563eb',
        }).then(() => {
            window.location.href = 'login/login.html';
        });
        </script>";
  exit();
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id = $user_id";
$result = $conn->query($sql);
$user = $result->fetch_assoc();



include("../backappointment/conn.php");
include("../backappointment/insert.php");
$result = $conn->query("SELECT * FROM client ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .styled-wrapper .button {
      display: block;
      position: relative;
      width: 76px;
      height: 76px;
      overflow: hidden;
      outline: none;
      background-color: transparent;
      cursor: pointer;
      border: 0;
    }

    .styled-wrapper .button:before {
      content: "";
      position: absolute;
      border-radius: 50%;
      inset: 7px;
      border: 3px solid black;
      transition:
        opacity 0.4s cubic-bezier(0.77, 0, 0.175, 1) 80ms,
        transform 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) 80ms;
    }

    .styled-wrapper .button:after {
      content: "";
      position: absolute;
      border-radius: 50%;
      inset: 7px;
      border: 4px solid #599a53;
      transform: scale(1.3);
      transition:
        opacity 0.4s cubic-bezier(0.165, 0.84, 0.44, 1),
        transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      opacity: 0;
    }

    .styled-wrapper .button:hover:before,
    .styled-wrapper .button:focus:before {
      opacity: 0;
      transform: scale(0.7);
      transition:
        opacity 0.4s cubic-bezier(0.165, 0.84, 0.44, 1),
        transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .styled-wrapper .button:hover:after,
    .styled-wrapper .button:focus:after {
      opacity: 1;
      transform: scale(1);
      transition:
        opacity 0.4s cubic-bezier(0.77, 0, 0.175, 1) 80ms,
        transform 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) 80ms;
    }

    .styled-wrapper .button-box {
      display: flex;
      position: absolute;
      top: 0;
      left: 0;
    }

    .styled-wrapper .button-elem {
      display: block;
      width: 30px;
      height: 30px;
      margin: 24px 18px 0 22px;
      transform: rotate(360deg);
      fill: #f0eeef;
    }

    .styled-wrapper .button:hover .button-box,
    .styled-wrapper .button:focus .button-box {
      transition: 0.4s;
      transform: translateX(-69px);
    }

    .secim {
      margin-bottom: 30px;
      justify-content: center;

    }

    .secim img {
      width: 250px;
    }

    a {
      text-decoration: none;
    }

    .form-section {
      margin: 0 30px;
    }

    h2 {
      background-color: #2196F3;
      color: white;
      padding: 10px;
      margin-bottom: 50px;
    }

    .driver-card {
      background-color: #ffffff;
      border-left: 6px solid #2196F3;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      width: 290px;
      padding: 25px;
      display: inline-block;
      margin: 10px 10px;
    }

    .driver-info {
      font-size: 16px;
      margin-bottom: 10px;
      color: black;
      padding-top: 8px;
    }

    .driver-card .driver-info .label {
      font-weight: bold;
      color: #444;
    }

    .opr {
      background: #2196F3;
      color: white;
      margin: 10px;
    }

    /* From Uiverse.io by zymantas-katinas */
    .button {
      position: relative;
      border: none;
      background: transparent;
      padding: 0;
      outline: none;
      cursor: pointer;
      font-family: sans-serif;
    }

    /* Shadow layer */
    .button .shadow {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.25);
      border-radius: 8px;
      transform: translateY(2px);
      transition: transform 600ms cubic-bezier(0.3, 0.7, 0.4, 1);
    }

    /* Edge layer */
    .button .edge {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border-radius: 8px;
      background: linear-gradient(to left,
          hsl(217, 33%, 16%) 0%,
          hsl(217, 33%, 32%) 8%,
          hsl(217, 33%, 32%) 92%,
          hsl(217, 33%, 16%) 100%);
    }

    /* Front layer */
    .button .front {
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 12px 28px;
      font-size: 1.25rem;
      color: white;
      background: hsl(217, 33%, 17%);
      border-radius: 8px;
      transform: translateY(-4px);
      transition: transform 600ms cubic-bezier(0.3, 0.7, 0.4, 1);
    }

    /* Hover and active states */
    .button:hover .shadow {
      transform: translateY(4px);
      transition: transform 250ms cubic-bezier(0.3, 0.7, 0.4, 1.5);
    }

    .button:hover .front {
      transform: translateY(-6px);
      transition: transform 250ms cubic-bezier(0.3, 0.7, 0.4, 1.5);
    }

    .button:active .shadow {
      transform: translateY(1px);
      transition: transform 34ms;
    }

    .button:active .front {
      transform: translateY(-2px);
      transition: transform 34ms;
    }

    /* Disable text selection */
    .button .front span {
      user-select: none;
    }
  </style>
</head>

<body>


  <div class="container my-3">
    <div class="styled-wrapper">
      <a href="../index.php" target="">
        <button class="button">
          <div class="button-box">
            <span class="button-elem">
              <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="arrow-icon">
                <path fill="black" d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"></path>
              </svg>
            </span>
            <span class="button-elem">
              <svg fill="black" viewBox="0 0  24 24" xmlns="http://www.w3.org/2000/svg" class="arrow-icon">
                <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"></path>
              </svg>
            </span>
          </div>
        </button>
      </a>
    </div>
    <div class="row">
      <div class="row text-center secim">
        <img src="../assets/Uplods/<?php echo !empty($user['img']) ? $user['img'] : 'default.png'; ?>"
          alt="Profile Picture" class="img-fluid rounded-circle mb-3">

        <form action="upload_image.php" method="post" enctype="multipart/form-data">
          <div class="input-group">
            <input type="file" class="form-control" name="profile_image" accept="image/*" required>
            <button class="button" type="submit" name="upload">
              <span class="shadow"></span>
              <span class="edge"></span>
              <div class="front">
                <span>Upload</span>
              </div>
            </button>
          </div>
        </form>
      </div>

      <div class="row">
        <table class="table table-bordered">
          <tr>
            <th>Username</th>
            <td><?php echo htmlspecialchars($user['username']); ?></td>
          </tr>
          <tr>
            <th>Email</th>
            <td><?php echo htmlspecialchars($user['email']); ?></td>
          </tr>
          <tr>
            <th>Reservations</th>
            <td>
              <?php while ($row = $result->fetch_assoc()): ?>
                <div class='driver-card'>
                  <div class='driver-info'><span class='label'>Appointment Number :</span> D-<?= $row['id'] ?></div>
                  <div class='driver-info'><span class='label'>Name :</span> <?= htmlspecialchars($row['name']) ?></div>
                  <div class='driver-info'><span class='label'>Mobile :</span> <?= htmlspecialchars($row['mobile']) ?>
                  </div>
                  <div class='driver-info'><span class='label'>Department :</span>
                    <?= htmlspecialchars($row['department']) ?>
                  </div>
                  <div class='driver-info'><span class='label'>Date :</span> <?= htmlspecialchars($row['date']) ?></div>
                  <div class='driver-info'><span class='label'>Time :</span> <?= htmlspecialchars($row['time']) ?></div>
                  <form method="POST" action="">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <button type="submit" name="delete" class="btn opr">Delete</button>
                    <button type="submit" name="update" class="btn opr">Edite</button>
                  </form>
                </div>
              <?php endwhile; ?>
            </td>
          </tr>
        </table>
      </div>
      <div class="row">
        <div class="col-3"></div>
        <a href="edit_profile.php" class="col-4">
          <button class="button">
            <span class="shadow"></span>
            <span class="edge"></span>
            <div class="front">
              <span>Edit Profile</span>
            </div>
          </button>
        </a>

        <a href="../login/logout.php" class="col-4">
          <button class="button">
            <span class="shadow"></span>
            <span class="edge"></span>
            <div class="front">
              <span>Sign out</span>
            </div>
          </button>
        </a>
        <div class="col-3"></div>

      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>