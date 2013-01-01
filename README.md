moodle_filter_cdn
=================

this filter turns bitsontherun video links into signed URLs. This effectively prevents leeching. 
Bits On The Run is a comercial video CDN service and offers free professional CDN for everybody.
This makes it very attractive for teachers and schools to put large size content there instead of
loading videos to the moodle data server.

Example:
[bitsontherun 3Wfn34uw-5cnekf32]  can be inserted into text in moodle. 
This will be translated into a singed link to a external resource at bitsontherun.com video CDN service.

The settings need to be set in the moodle settings:

* API-Secret (provided to every user of bitsontherun.com at http://dashboard.bitsontherun.com/settings/)
 
* Timeout (how long the link will remain)

* DNS-Mask (your content can have one. If you need one, DNS mask bitsontherun contentserver to serve feeds,
           players, thumbs and videos under your own domain. To make this work, set a CNAME record in your 
           domain DNS settings. Contact your hosting provider. 
           
* default player (create a player in http://dashboard.bitsontherun.com/players/ and add the code here to play 
                 every video with the same player, or add a player-code individual to a link.)

The filter was created by Guido Hornig, http://actXcellence.de and comes without any warranty.
It worked for me and my environment. Do not expect any service.

Please comment and add your solutions.
I am working also on a repository.

Installation:
Read http://developer.longtailvideo.com/botr/system-api/
