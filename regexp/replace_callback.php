<?php
$str = '<hTmL><bOdY style="background: white;">Hello, world!</bOdY></html>';

$str = preg_replace_callback(
    '{(?<btag></?)(?<content>\w+)(?<etag>.*?>)}s',
    fn($m) => $m['btag'].strtoupper($m['content']).$m['etag'],
    $str);

echo htmlspecialchars($str);
