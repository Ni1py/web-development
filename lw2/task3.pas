PROGRAM Name(INPUT, OUTPUT);
USES
  DOS;
VAR
  Len: INTEGER;
  S: STRING;
BEGIN {SarahRevere}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Len := 0;
  S := GetEnv('QUERY_STRING');
  IF POS('name', S) = 1
  THEN
    BEGIN
      Len := LENGTH(S) - 5;
      WRITELN('Hello dear, ', COPY(S, 6, Len),'!')
    END
  ELSE
    WRITELN('Hello Anonymous!')
END. {SarahRevere}
