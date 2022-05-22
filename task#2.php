<?php
function task(string $text): void
{
echo $text;
}
echo task("parameter:");

function repeatcontent(int $count=1):void{
for ($i=0; $i <= $count; $i++) {
task(" Happy world!");
}
}

repeatcontent();
repeatcontent(5);