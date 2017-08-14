@echo off
taskkill /IM wmplayer.exe
Setlocal EnableDelayedExpansion

set "Video_PATH=D:\Music\Egs"
set counter=0

for /f "tokens=*" %%a in ('forfiles /p "%Video_PATH%" /m *mp4') do (
    set Rand_PATH[!counter!]=%%~nxa
    set /a counter+=1
)

set /a Random_Music=%random% %% %counter%
set "Full_PATH=%Video_PATH%\!Rand_PATH[%Random_Music%]!"

echo Random Music & echo. & echo !Rand_PATH[%Random_Music%]!
start "" "%Full_PATH%"
exit /B
pause >nul
