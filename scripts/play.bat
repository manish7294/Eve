@echo off
Setlocal EnableDelayedExpansion

set "Music_PATH=D:\Music\Kk"
set counter=0

for /f "tokens=*" %%a in ('forfiles /p "%Music_PATH%" /m *mp3') do (
    set Rand_PATH[!counter!]=%%~nxa
    set /a counter+=1
)

set /a Random_Music=%random% %% %counter%
set "Full_PATH=%Music_PATH%\!Rand_PATH[%Random_Music%]!"

echo Random Music & echo. & echo !Rand_PATH[%Random_Music%]!
start "" "%Full_PATH%"

pause >nul