PROGRAM Parametrs(INPUT, OUTPUT);
USES
  DOS;

FUNCTION GetQueryStringParameter(Key: STRING): STRING;
VAR
  Len: INTEGER;
  S: STRING;
BEGIN
  S := GetEnv('QUERY_STRING');
  IF POS(Key, S) <> 0
  THEN
    BEGIN
      Len := LENGTH(S);
      S := COPY(S, POS(Key, S), Len);
      IF POS('&', S) <> 0
      THEN
        GetQueryStringParameter := COPY(S, POS(Key, S) + POS('=', S), POS('&', S) - POS('=', S) - 1)
      ELSE
        BEGIN
          Len := LENGTH(S);
          GetQueryStringParameter := COPY(S, POS(Key, S) + POS('=', S), Len)
        END
    END
END;

BEGIN {WorkWithQueryString}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('First Name: ', GetQueryStringParameter('first_name'));
  WRITELN('Last Name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'))
END. {WorkWithQueryString}

