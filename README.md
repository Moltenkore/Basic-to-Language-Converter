# Basic to Language Converter
Website can be found here: http://mk.darkserver.co.uk/lang/
Aurora Station can be found here: https://aurorastation.org/

## SQL
Perhaps a bit more lenient than it should be.

Don't forget to change /resources/database/handle.php to your database settings.

'''
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS lang (
  id int(11) NOT NULL AUTO_INCREMENT,
  lkey varchar(10) NOT NULL,
  input varchar(10000) NOT NULL,
  output varchar(10000) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;
'''
