@ECHO OFF

for /f "tokens=1 delims=." %%i in ('dir /B /d /s *.sln') do (
7za a -tzip -r %%~ni
rem ��������� ������ �������� ���������� ����� ������� �� ��������� �������. ���������������, ���� �� �����. (� ������� rem)
EXIT /B
)

EXIT /B