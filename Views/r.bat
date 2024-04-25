@echo off
setlocal enabledelayedexpansion

rem Set the directory containing the HTML files
set "directory=C:\path\to\your\directory"

rem Change to the specified directory
cd /d "%directory%"

rem Loop through each HTML file in the directory
for %%f in (*.html) do (
    rem Rename the file with .php extension
    ren "%%f" "%%~nf.php"
)

echo All HTML files have been renamed to PHP extension.

pause
