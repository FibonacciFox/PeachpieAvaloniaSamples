@echo off
chcp 65001

:retry
rem ____________________________
dotnet clean & dotnet build

rem _____________________________
if %errorlevel% neq 0 (
    echo Ошибка сборки, пробую пересобрать проект
    goto :retry
)

echo Команда выполнена успешно, запускаю проект.
dotnet run --project Application