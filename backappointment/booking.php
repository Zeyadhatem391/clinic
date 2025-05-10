<?php
$result = $conn->query("SELECT * FROM client ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>

<head>
    <style>
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
        .opr{
            background:#2196F3;
            color: white;
            margin: 10px;
        }
    </style>
</head>

<body>
    <div class="form-section">
        <h2>Appointments</h2>
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class='driver-card'>
                <div class='driver-info'><span class='label'>Appointment Number :</span> D-<?= $row['id'] ?></div>
                <div class='driver-info'><span class='label'>Name :</span> <?= htmlspecialchars($row['name']) ?></div>
                <div class='driver-info'><span class='label'>Mobile :</span> <?= htmlspecialchars($row['mobile']) ?></div>
                <div class='driver-info'><span class='label'>Department :</span> <?= htmlspecialchars($row['department']) ?>
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
    </div>
</body>

</html>




