#!/usr/bin/perl
print "content_type:text/html\n\n";
print "<code>\n";
foreach $key(sort keys(%ENV))
{
  print "$key=$ENV{$key}\n";
}
