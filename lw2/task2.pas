PROGRAM SarahRevere(INPUT, OUTPUT);
USES
  DOS;
BEGIN {SarahRevere}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  IF GetEnv('QUERY_STRING') = 'lanterns=1'
  THEN
    WRITELN('The British are coming by sea.')
  ELSE
    IF GetEnv('QUERY_STRING') = 'lanterns=2'
    THEN
      WRITELN('The British are coming by land.')
    ELSE
      WRITELN('The North Church shows only ''', GetEnv('QUERY_STRING'), '''.')
END. {SarahRevere}
