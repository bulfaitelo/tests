package XUploadConfig;

BEGIN
{
  use Exporter;
  @XUploadConfig::ISA = qw( Exporter );
  @XUploadConfig::EXPORT = qw( $c );
}

our $c=
{
 # Directory for temporary using files
 temp_dir        => '/var/www/cgi-bin/temp',

 # Directory for uploaded files
 target_dir      => '/var/www/cgi-bin/uploads',

 # Allowed file extensions delimited with '|'
 #ext_allowed     => 'jpg|jpeg|gif|png|rar|zip|mp3|avi|txt|csv',
 ext_allowed     => '.*',

 # URL to send all input values from upload page
 url_post        => 'http://site.com/post.php',

 # The link to redirect after complete upload
 # This setting can be submitted from HTML form, then it will have priority
 # url_post have priority over redirect
 redirect_link   => '',

 # Max length of uploaded filenames (without ext). Longer filenames will be cuted.
 max_name_length => 64,

 # Type of behavior when uploaded file already exist on disc. Available 3 modes: Rewrite/Rename/Warn
 copy_mode       => 'Rename',

 # Maximum total upload size in Mbytes
 max_upload_size => 100,      

 # Time to keep temp upload files on server, sec (24 hours = 86400 seconds)
 temp_files_lifetime => 86400,

};

1;
