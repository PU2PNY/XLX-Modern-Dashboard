<?php
declare(strict_types=1);

$aprsInstalled = is_file(__DIR__ . '/aprs-dprs/index.php');
?>
<?php if ($aprsInstalled): ?>
<section class="panel" style="margin:18px auto;max-width:920px;padding:28px;text-align:center">
  <p class="eyebrow">APRS / D-PRS</p>
  <h1>Opening APRS / D-PRS…</h1>
  <p>The optional APRS/D-PRS component is installed separately.</p>
  <p><a href="aprs-dprs/">Open APRS / D-PRS</a></p>
</section>
<script>window.location.replace('aprs-dprs/');</script>
<?php else: ?>
<section class="panel" style="margin:18px auto;max-width:920px;padding:28px">
  <p class="eyebrow">OPTIONAL COMPONENT</p>
  <h1>APRS / D-PRS</h1>
  <p>APRS/D-PRS is maintained as an independent component and is not embedded in this dashboard repository.</p>
  <p>Install it from the official standalone repository. After installation, the interface is published at <code>/aprs-dprs/</code>.</p>
  <p><a href="https://github.com/PU2PNY/XLX-APRS-DPRS" target="_blank" rel="noopener noreferrer">XLX-APRS-DPRS on GitHub</a></p>
</section>
<?php endif; ?>
