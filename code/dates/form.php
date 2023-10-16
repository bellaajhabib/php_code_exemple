<?php
session_start();

echo '<pre>';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['timezone'])) {
   $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
     $date = $_POST['date'] ?? '';
     $time = $_POST['time'] ?? '';
     $txt = $_POST['txt'] ?? '';
      $timestamp = strtotime("$date $time");
      $dateformat = date(DateTimeInterface::ATOM, $timestamp);
      $timezone = $_SESSION['timezone'];
    try {
        $datetime = new DateTime("$date $time", new DateTimeZone($_SESSION['timezone']));
    } catch (Exception $e) {
    }

       $dateTz = $datetime->format(DateTime::ATOM);
       $datetime->setTimezone(new DateTimeZone('UTC'));
    $dateNoTz = $datetime->format(DateTime::ATOM);
}

echo '<pre>';
?>
<?php if (!isset($_SESSION['timezone'])): ?>
<script>

const timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
  console.log(timezone);
    fetch('http://localhost:8099/dates/timezone.php',{
        method:"POST",
        headers:{
            "Content-type" : "application/json; charset=utf-8"
        },
        body: JSON.stringify({
            timezone: Intl.DateTimeFormat().resolvedOptions().timeZone,
            lang: 'Fr'
        })
    }).then(res => {res => location.reload()})
</script>
<?php endif; ?>
<form action="<?= $_SERVER['PHP_SELF']?>" method="post">
    <input type="date" name="date" value="<?= $date ??  '' ?>">
    <input type="time" name="time" value="<?= $time ??  '' ?>">
    <input type="text" name="txt" value="<?= $txt ??  '' ?>">
    <button>submit</button>
</form>

<h1>Fuseau : <?= $timezone ?? '' ?></h1>
<h1>Date TZ: <?= $dateTz ?? '' ?></h1>
<h1>Date UTC: <?= $dateTz ?? '' ?></h1