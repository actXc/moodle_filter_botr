moodle_filter_cdn
=================
Content Delivery Network - filter for moodle2.x using content at "Bits on the run".
This filter turns bitsontherun video links into signed URLs. This effectively prevents leeching.
No HTML or SCRIPT tags needed.

Bits On The Run is a comercial video CDN service and offers free professional CDN for everybody.
This makes it very attractive for teachers and schools to put large size content there instead of
loading videos to the moodle data server.

##Example:
`[bitsontherun 3Wfn34uw-5cnekf32]`  can be inserted into text in moodle. 
This will be translated into a singed link to a external resource at bitsontherun.com video CDN service.
This link can not be used longer than the timeout defines. If the link is stolen, if becomes useless after a while.
This does not protect you video from beeing screen copied, but it makes it really difficult to reuse the link some where else.

##Settings
The settings need to be set in the moodle settings using the admin interface:

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

##Installation:
1. put all files into the folder moodle/filter/cdn
2. go to moodle site administration -> notification (the filter should be listed)
3. install
4. do the set up

##Set up:
1. go to site administration -> plugin -> filter ->cdn filter
2. add you credentials etc.
3. enable the filter where it is needed

Report your experience here
