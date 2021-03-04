<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
class FaqController extends Controller
{
    public function findsearchFaq(){
        
    }

    public function retrieveFaqlist(Request $request){
        $faqlist = [
            [
                'title' => 'HOW LONG WILL THE APPOINTMENT TAKE?',
                'description' =>"A shoot can take anywhere from 1 to 5 hours depending on the package ordered. We normally run a back to back schedule so please arrive prior to your appointment time to stage the home. Flythrough 13 and 18 packages are allocated 1 hr., Flythrough 25 packages 1 hr. 15 mins., Showcase packages 1 hr. 30 mins., Premier packages 3 hours and Ultimate 5 hours. All times are calculated from photographer arrival to departure. Adding ‘Plus, Premium and Supreme' options will add 5, 10 & 15 minutes to the appointment time respectively.
                "
            ],
             [
                'title' => 'HOW LONG SHOULD IT TAKE BEFORE I GET MY PHOTOS AND VIDEO TOUR LINKS BACK AFTER THE SHOOT
                ',
                'description' =>"Photos will post to your account the next day.  The Video tour will also post to your account the next day. Did you guys really say the next day?  We sure did!  we know how important it is for you to impress your sellers with how 'on the ball' you are and getting the listing into MLS right away.  No two or three day turn around time here!

                "
            ],
            [
                'title' => 'HOW DO I DOWNLOAD MY PHOTOS FOR PRINTING AND WHAT SHOULD I USE FOR MLS?
                ',
                'description' =>"Simply log in to your Hometakes account and look for the 'download photos' next to the property address or you can click the 'download photos' link in the email that was sent to you. After clicking the link, you will be prompted to download the zipped file and to choose where to save it on your PC (A Mac will automatically start the download and save it to your downloads folder).  Then double-click on the zip file to extract the folders. Once extracted, you will see Original resolution and MLS/Low resolution photo folders. Depending on your connection speed it may take a while to download the zip file. The zip files can be as large 500 MB depending on the package ordered.  An Original size photo can be as large as 20 MB or more.  The photos from this folder should be used for print only.  For MLS and uploading to the web, you should use photos from the file named 'Photos optimized for MLS placement'. Trying to upload Original size photos to MLS will not work as MLS has a limit on the size of the file that can be uploaded and most of the Original sized photos are too large.  

                Due to server space on our site, the zip file links are automatically deleted from our server after 60 days.  If you are reading this and it has been longer than 60 days since we filmed your tour, this does not mean that you cannot download your photos once the 'Download' link is no longer active.  It just means that you won't be able to download them all in one file.  Instructions on how to individually download them are provided by clicking the 'view download instructions' link or by Clicking Here.

                "
            ],
            [
                'title' => 'I NORMALLY RECEIVE AN EMAIL SAYING THAT MY PHOTOS OR VIDEO TOUR IS COMPLETE BUT I DIDN’T THIS TIME. WHY IS THAT?

                ',
                'description' =>"The VERY BEST WAY to get your photos or tour links once they have been completed, is to log in to your account and get them from there.  

                If you wish to forward photo or video links to anyone, simply log into your account and copy and paste them to your email. The emails that tell you that your tours and photos are ready are system generated one time only, we cannot duplicate them and resend them to you.   

                Please note: You should wait until the estimated delivery time of 2 business days for photos and 3 business days for video before emailing us. Time periods are calculated from the next business day after the appointment. If you dont see them in your account after that period of time, feel free to contact us.   Quite often our system emails will not make it to your inbox or even your spam/junk folder.  This may be due to your webserver marking our email address as a spammer. Typically, this happens with AOL or Comcast email addresses but sometimes happens with others too.  We strongly suggest using a different company other than AOL or Comcast, plus they are not considered 'business professional' email addresses.  If you must have one thats not your name such as john@johndoe.com, the best alternative is a Gmail address.  It's free and generally more reliable in allowing the emails from our system to get through to you.

                "
            ],
            [
                'title' => "THE DOWNLOAD LINK FOR THE PHOTOS ISN'T AVAILABLE ANYMORE, CAN I STILL DOWNLOAD MY PHOTOS?

                ",
                'description' =>"Contact us with the property address and we will prepare a new download zip file link and email it to you.  The reason why your zip links no longer appeared in your Hometakes account is because after 60 days the files are removed from our server due to storage requirements. 

                "
            ],
            [
                'title' => 'THERES AN IMAGE OUT OF FOCUS, WHAT CAN BE DONE ABOUT IT?

                ',
                'description' =>"If an image is out of focus, the photographer can go back to the property to reshoot the image (of course, no charge).   Or, if you prefer we will note your account and give you three additional photos on your next tour.

                "
            ],
            [
                'title' => 'CAN I CALL HOMETAKES?

                ',
                'description' =>"Our support representatives don't work for anyone else but Hometakes.  The owner of Hometakes personally trains each and every one of them in all areas of operations so that they know what he knows about the business.  Outside of normal business hours, they still monitor the voicemail and email tickets and will reply as soon as they see one.

                "
            ],
            [
                'title' => 'CAN I GET THE VIDEOGRAPHERS PHONE NUMBER?

                ',
                'description' =>"Sure you can.  If its your first appointment, ask the videographer for their cell phone number when you first meet them and they’ll give it to you.  You will generally get the same videographer as they work in geographical areas.   A lot of agents dont pick up to numbers that they dont recognize so please register them in your phones database because they may need to call you and get a responce for gate clearance right away. Please note: they will refer you to us if you ask them any support questions.  You should only call them if something changes on your appointment such as a new gate code has been implemented since you booked or any other similar issues.

                "
            ],
            [
                'title' => 'HOW CAN I FIND OUT DETAILED PRICING ON YOUR PACKAGES?

                ',
                'description' =>"You can simply create an account with us an you will be able to access our pricing and packages with samples that show you exactly what you get in a package. Or you can simply click on Pricing on our Home Page.  

                "
            ],
            [
                'title' => 'HOW DO I SCHEDULE A TOUR?

                ',
                'description' =>"The first thing you should do prior to placing an order is to get three separate times/dates that work with yours or your sellers schedule (we film Monday -Friday only).  Once you have 3 times, log in to your account and choose a tour package.  Choose your 3 appointment times and submit your order.  If you ordered after 6 PM the previous day or on the same day, you'll receive an email specifying the date and time of your appointment between 4 pm & 6 pm.  You may receive an email earlier, however, during busy times, we sometimes need to see all appointment requests from the last 20 hours worth of orders.  This is so that we can schedule the videographer as efficiently and map out the best possible route for that day.  So if you are used to getting a quicker response, don't worry, we have not forgotten about you.  

                If you do not receive an email, it may have been blocked by your email service.  If this happened, simply log in to your account and you'll see the date and time of your appointment under the pending tour section. The videographer will call you the day before your appointment to confirm with you the appointment.  He will leave a message if you cannot pick up.  However,  please be sure to call or text them back or your appointment may be cancelled if you cannot be reached.

                "
            ],
            [
                'title' => 'WHEN WILL I HEAR FROM THE PHOTOGRAPHER PRIOR TO THE APPOINTMENT?

                ',
                'description' =>"The photographer will only call you if they have been held up for any reason such as a traffic accident.  However, you should get a text from our system reminding you of our appointment 30 mins. prior to your appointment time.

                "
            ],
            [
                'title' => 'HOW DO I CANCEL MY APPOINTMENT OR RESCHEDULE A TOUR FOR A DIFFERENT TIME?

                ',
                'description' =>"All cancellations or re-scheduling of appointments must be made through your account.  Our scheduling system is tied to the appointment set in your account and because of this we cannot accept cancelations emailed or through our ticketing system.  To cancel or reschedule, simply login to your account and click the re-schedule/cancel link.  If you are just canceling and are not ready to re-schedule simply click the link and close your browser.  When you are ready to re-schedule, just log back on and click the re-schedule link.  If you want to cancel your order because you no longer need the tour, contact us and tell us that you want to delete the order from our system.

                "
            ],
            [
                'title' => "WHAT IS ‘CANCELATION INSURANCE'?

                ",
                'description' =>"Cancelation insurance allows you to cancel the appointment all the way up to a 1 prior to the appointment.  If the insurance is not taken, we require 18 hours notice if you want to avoid a $30 rescheduling/cancelation fee.  Remember, weather can change in an instant in Florida, so if you are considering canceling due to overcast weather, leave it as close as you can to the hour before the appointment as we have seen weather go from overcast to sunny in an instant. 

                "
            ],
            [
                'title' => "MAY I UPGRADE MY PACKAGE OR ADD ADDITIONAL PHOTOS TO MY PACKAGE ON THE DAY OF THE SHOOT?",
                'description' =>"Sure you can.  Providing the photographer has time to shoot the upgrades, you’ll simply sign the upgrade sheet.

                "
            ],
            [
                'title' => "I WANT TO UPLOAD THE VIDEO TOUR TO MY SOCIAL NETWORKING SITES SUCH AS FACEBOOK AND YOUTUBE. HOW DO I DO THAT?
                ",
                'description' =>"
                When ordering your tour, the option 'original video file' should already be checked and added to your order ($10).   When the file is ready, we will send you a link so that you can download the file.  However, if you unchecked it and have now decided that you want it, simply send us an email and we will add the $10 fee to your account and send you the link.  

                "
            ],
            [
                'title' => "I WANT TO UPLOAD THE VIDEO TOUR TO MY SOCIAL NETWORKING SITES SUCH AS FACEBOOK AND YOUTUBE. HOW DO I DO THAT?
                ",
                'description' =>"When ordering your tour, the option 'original video file' should already be checked and added to your order ($10).   When the file is ready, we will send you a link so that you can download the file.  However, if you unchecked it and have now decided that you want it, simply send us an email and we will add the $10 fee to your account and send you the link.
                
                After saving the file to your computer you will then be able to upload the video to your social networking sites.  Please note that the 'original video file' is for the sole purpose of uploading the video to your own social networking video sites such as YouTube, Facebook and Twitter. It is by no means a release of the copyrighted material from us."  
            ],
            [
                'title' => "WHAT IS A TOWN OR AMENITY TOUR? ",
                'description' =>"A Town or Amenity tour is a narrated video of the town or facilities where the property is located.  They educate the buyers that are new to the area or not familiar with the amenities of a community or condo. As agents know so well, the home buying process is not entirely dependent on the likability of the home.  The area (town) and any amenities are just as important when making their purchase.  Town and Amenity tours are automatically shown via video and then added to your package after you enter the zip code address into the address field on our order form.  If you do not want either, simply uncheck the pertaining check boxes.  If we dont have an amenity or town tour for the property in our system we will be happy to make them for you.
                "
            ],
            [
                'title' => "I ORDERED A NEW AMENITY TOUR BUT DIDN’T SEE IT ATTACHED TO MY HOME TOUR. WHERE IS IT?
                ",
                'description' =>"Producing an amenity tour takes longer to produce than a home tour.  It may take two weeks to produce after the home tour is ready.  The process in producing a new amenity tour is much different to making a home tour.  The process works like this:  First the videographer that shot the video has to edit the tour (this is not done in our regular edit department). They then upload the tour to a temporary website.  The link to the video is then sent to the script writer so that they can see and write about the amenities.  However, before they can write a script, they have to research the amenities online through various websites. Once written, the script is then sent to the narrator for recording and then sent back to us.  We then forward it to the videographer for it to be edited into the video. The video is then compressed into various formats and sent to the edit department for upload to our server. Once uploaded, it is added to our system and then placed next to your home tour on the tour template.  The price of this is $25. Amenity tours can be added to an agent's website for a yearly license fee of $249.  When a license is purchased, the agent no longer pays for the addition of that amenity tour in that community for any subsequent home tour that they order.  The original file for the amenity tour is not available for purchase.
                "
            ],
            [
                'title' => "I CAN’T SEE THROUGH THE WINDOWS ON THE VIDEO TOUR AND THE WINDOWS ARE BRIGHT WHITE, YET I CAN SEE CLEARLY THROUGH THE WINDOWS ON MY HDR PHOTOS. HOW IS THAT POSSIBLE?
                ",
                'description' =>"In order for you to understand why this can happen, we need to explain light sources and how it affects a camera.  When the camera is pointing toward a window, unlike the human eye which can clearly see both the inside and outside of a room at the same time, the camera is only able to see one light source at a time.  Daytime outside natural light is always much brighter than interior light, even with the lights on.  Because of this, you have to set the exposure on the video camera to see one or the other.  If its an interior video scene, naturally the exposure is set to see the inside of the room. This most often will result in the windows being whited out on the video sometimes to the point of not being able to see through the window at all (especially if it's a bright sunny day outside).  If there is a view from the window that you wish to show, we overcome this by setting the camera on auto exposure and panning from the room to the view outside.  When you view your video, you will notice that as the camera gradually points toward whats outside the window that the room darkens (sometimes to almost black).  This should clearly demonstrate the difference in the brightness between inside exposure and outside exposure. 

                At this point you may be saying 'but I've been able to see whats outside and whats inside at the same time on some of your videos before!’. So how can the above explanation be true?  We’ll explain how this can happen under certain circumstanses.  

                If the sun is blocked due to could coverage, this can greatly lower the brightness of the outside light. Add to this that the suns is position is on the opposite side of the home relative to the window, plus a patio overhang such as a lanai and a heavy tint on the windows, and it results in lowering the brightness of the exterior light.  As the outside light has been lowered, its now closer to the exposure of the inside light thereby allowing you to see through the window at the same time. Theres only way we can guarantee being able to see both inside and outside at the same time and thats by ordering our custom Ultimate Package.  And why does that make a difference?  Because we shoot the inside of the home in the evening hours after the sun has set.  We choose the time to film when the outside and inside light are even exposures thus allowing to see clearly whats outside and whats inside. 

                So whats the deal with photography? With regular photography you are capturing a single image again means that the camera can only be exposed to one source of light, either inside or outside. Again, if its the inside you are shooting, then the exposure is set for that which can result in the window being whited out.  To be able see both the inside and outside the window in a photo, then High Dynamic Range photography is needed (otherwise known as HDR photography).  With HDR photography, multiple exposures are taken set to capture both inside and outside light sources.  They are then merged together using special software (each done by hand) which results in a photo where you can see whats both inside and outside.

                "
            ],
            [
                'title' => "IF I ORDER A TOUR CAN I GET A REFUND ONCE ORDERED?
                ",
                'description' =>"Providing we have not filmed the property (and there is no cancelation fee to pay) you can get a full refund.  We cannot partially refund properties where the videography and photography has been shot.
                "
            ],
            [
                'title' => "WHAT IS HDR PHOTOGRAPHY?
                ",
                'description' =>"Contrary to what a lot of people think, HDR photography stands for High dynamic Range and not High Definition Range photography.  High-dynamic-range photographs are achieved by capturing multiple photographs using exposure bracketing, and then merging them into one image using special photographic software.  This process is known as HDR imaging and is a intensive hands on human process.  The camera's 'raw image' format is used because JPG photo format doesn't offer the sharpness of a raw image which is best for the HDR process. Photos taken in JPG format introduce an undesirable lossy compression effect which loses detail in the photo.  With HDR, each photo has to be individually manipulate to adjust the best parts of the exposure of each of the multiple photographs that are taken.  This can only be achived by someone who specializes in the art of HDR manipulation.  This specific skill set and the aspect that each photograph has to be manipulated by a human are some of the reasons why HDR images carry a slightly more higher cost. However, the results are significantly better than standard photography.  

                With HDR photography, you will be able to see what is outside of a window instead of seeing a 'whited out' window or whats known as 'window blowout'.  This is what normally occurs with standard photography.  Also with standard photogrpahy, the light that comes through the window may make the rest of the photo appear as though it were 'washed out' due to additional light from the window. 

                HDR images are sharper due to the fact that the original images are taken in RAW format.  Color accuracy on a standard photograph is considerably less than HDR photography as only one exposure is taken for standard photography.  Because of this, colors in the photos (walls, flooring, furniture etc.) can be effected by the light conditions in the room at the time that the photo is taken.  This means that colors may appear brighter or duller and not as true of a representation of the colors in real life to the eye.  With HDR, because of the fact that multiple shots are taken with various exposures, the resulting photo can be manipulated to produce a much more 'color accurate' photo.

                "
            ],
            [
                'title' => "HOW DO I OPEN AND SAVE THE PHOTO ZIP FILE I JUST DOWNLOADED?
                ",
                'description' =>"For Mac users, zipped files automatically unzip themselves and can be found in the downloads folder.  For P.C.'s: After downloading the zip file, you have to extract the photos from the zip folder. During the extraction process, your P.C. will automatically create a normal folder where your photos can be found. Once completed, you should upload your photos to MLS from the new folder it created.  If you dont extract the files from the zip folder, you wont be able to upload to any website (including MLS).  After you have completed the extraction process, you should delete then delete the zip folder. If you’ve never extracted files from a zip folder before, click this link to view a video tutorial.
                "
            ],
            [
                'title' => "WHY CAN’T I UPLOAD THE PHOTOS YOU SENT ME TO THE MLS OR FOR THAT MATTER ANY OTHER WEBSITE?
                ",
                'description' =>"You're most likely trying to upload the photos directly from the zip file that you downloaded from us.  The internet will not allow you to directly upload from zip file folders (zip files have a little zipper going across them on PC's). After downloading the zip file from us, you have to extract the photos from the zip folder. This should create and place the photos into a normal folder but sometimes you have to manually save the photos to another folder.  Once they are saved to a new folder, then and only then, can they be uploaded to your MLS or other websites.  After you have completed this process, you should delete the zip folder from your computer so that you do not mistakenly try to upload photos from the zip file folder again.  On Mac computers, the process is always done automatically as soon as you open the zip folder.  However,  if you’ve never extracted files from a zip folder on a P.C. then  View this short YouTube tutorial on how to do it.
                "
            ],
            [
                'title' => "WHY CAN’T I ADD CANCELATION INSURANCE ON THE DAY OF THE SHOOT?
                ",
                'description' =>"Think of it like you declined the Full Collision Damage waiver on a rental car that you rented, had an accident, and then took the car back and asked the rental company if you can now add the insurance. Of course, they couldnt do it as its a insurance against what may happen and not after it happened.  It's advisable to add the insurance to your order it if you are unsure wheter or not you may have to cancel on short notice. Its already defaulted to be added so if you dont want it, you have to uncheck the check box.
                "
            ],
            [
                'title' => "CAN THE PHOTOGRAPHER HELP ME MOVE ITEMS THAT I DONT WANT TO BE SEEN IN THE VIDEO OR PHOTOS IN THE HOME?
                ",
                'description' =>"If you follow our operations guide on when to arrive and how to prepare the home, then the property should be ready to film as soon as the videographer/photographer arrives.  However, we realize that things don't always go as planned and you may need addtional staging time which our photographer will be happy to accomodate you with provided there isn't an appointment immediately after your appointment.  However, Unfortunately we cannot help with moving or touching anything due to liabilty reasons. Please dont be offended if you ask for help and the photographer tells you they cant.  It really is for liabilty reasons.   
                "
            ],
            [
                'title' => "CAN YOU PHOTOSHOP SOMETHING OUT OF A PHOTO?
                ",
                'description' =>"Sure we can. Photoshop services start from $25 per photo.  Depending on the complexity of the item(s) that need photoshopping, it may run higher.  Contact us with with a link to the photo and let us know what you want done and will will let you know the cost.
                "
            ],
            [
                'title' => "CAN YOU PHOTOSHOP SOMETHING OUT OF A VIDEO?
                ",
                'description' =>"No, photoshopping is for photos and not possible on video. Well actually it is but unless you had the budget of multi-million dollar movie, its cost prohibitive.  Video is taken at 30 frames per second.  Each frame would have to be edited individually.  So a 10 second clip would be 300 frames (Multiplied by $20 per frame or more) at it would cost upward of $6000 in addition to taking at least a month to complete.
                "
            ],
            [
                'title' => "CAN I CHANGE THE MUSIC ON MY VIDEO TOUR NOW THAT THE VIDEO IS COMPLETED OR IS THIS SOMETHING YOU HAVE TO DO?
                ",
                'description' =>"Unfortunately you cannot change it but we can.  Unlike photo slideshows where the music is not part of the tour and is playing in the background and easily changeable, with video the music is embedded into the timeline and is made part of the video.  The only way it can be changed is for the video to be re-edited, recompressed and re-uploaded to the servers.  The cost to do this on Flythrough or Premier tours is $25.  For Showcase and Ultimate packages its $50.
                "
            ],
            [
                'title' => "CAN I CHANGE TO A DIFFERENT NARRATOR/VOICEOVER NOW THAT THE VIDEO IS COMPLETED OR CAN I ADD OR CHANGE SOME VERBIAGE THAT WAS NOT IN MY ORIGINAL SCRIPT AND HAVE IT ADDED TO THE VIDEO?
                ",
                'description' =>"Yes. The cost for a re-record of the script by a narrator is $75 plus the re-edit fee of $50. Contact us with the details
                "
            ],
            [
                'title' => "I CAN SEE THE CAMERA OR PHOTOGRAPHERS REFLECTION IN A MIRROR IN THE PHOTO WHY IS THAT?
                ",
                'description' =>"Unfortunately there are situations where the camera or photographer can be seen in the reflection of a mirror. Rooms with mirrors on multiple walls or mirrors directly opposite the photographer cannot help but reflect the photographer or camera taking the photo.
                "
            ],
            [
                'title' => "MY SELLER DIDN’T LIKE PART OF THE TOUR/SOME OF THE PHOTOS, WHAT CAN BE DONE ABOUT IT?
                ",
                'description' =>"If your tour or photos were not produced to our 'Hometakes format and standards' as seen on our website samples, we will re-edit them for free (or return to re-shoot if necessary). However, if they are to our Hometakes format and standards, a reshoot fee will apply if you want us to return to the property.  Please understand that a photo may look different if shot at a different time of day.  However, it will not count as an unacceptable shot if the exposure is a little lighter or darker because of the exterior lighting (such as the sun pointing toward the camera on the front of home shot).  Please understand that we can't change the position of the sun.   If you feel the need to appease your seller, we can return for a reshoot for $75 plus $10 per photo and $25 per video scene.

                Our format for a Flythrough video is a walking shot into the room/scene followed by a panning shot (where applicable). You will also get a pan to the view outside on a room with a view to the rear of the property.  This constitutes a 'video scene'.  Depending on your package ordered, depends on how many video scenes you get.  See here for video scenes Vs. Package ordered.  A showcase package may get an extra panning shot depending on the size of the room.  Our format is the same for all packages that are shot, so there's consistency in our product and you always get what is in your package. If you wanted extra footage on a particular room/scene that was important to you (or your seller) you should have notified the videographer that you want to upgrade for extra video footage (or extra scene) to be taken of that room/scene on the day of the shoot.  

                On rare occasions, an agent has forwarded the tour link to their seller only to find that the seller does not like the style/format of the tour. Again, If you feel the need to appease your seller, we can allow the seller to act as 'Director' to the videographer. They may tell the videographer what to shoot and in the style the seller wants it done.  For example, all walking shots and no panning shots.  However, we would strongly urge you to avoid this if at all possible.  Most likely the tour end up not as good as seen in this example by this seller directed video.  Heres the same video shot in our Hometakes format that  can be seen here if you want to compare the two.

                "
            ],
            [
                'title' => "I CANT FIND THE EMAIL THAT I RECEIVED WITH THE LINK TO MY PHOTOS AND OR VIDEOS OR I DONT EVER REMEMBER RECEIVING IT FROM HOMETAKES. WHAT DO I DO?
                ",
                'description' =>"Just login to your Hometakes account.  There you will find the links to all of your tours and photos.
                "
            ],
            [
                'title' => "I AM TRYING TO SUBMIT AN ORDER BUT NOTHING HAPPENS OR MY ORDER WON'T GO THROUGH
                ",
                'description' =>"First we recommend using Safari if you are using a Mac or Explorer when ordering from your computer. We dont recommend ordering from a mobile device (you won't be able to hear the music choices from mobile devices).  If you are using the recommended browsers and your order still wont submit, you will need to clear your temporary internet files. Sometimes browsers get stuck when submitting forms on web pages for unknown reasons and clearing these files works 99% of the time.    Clearing your cache frequently is like the need for changing the oil on your car (only you should do it once a week if you are on the internet everyday). It will only run for so long before it breaks down or starts to splutter like a bad engine.

                If you dont know how to do it on the particular browser you are using, we have provided a link (below) that gives instructions on how to clear you cache for most browsers (however, we highly recommend Internet Explorer for PC's and Safari for Mac). After clearing it, YOU MUST CLOSE YOUR BROWSER AND RE-OPEN IT or your computer wont know that it has been reset (its vital that you do this or it still may not work). 

                Click here for instructions on how to clear your temporary internet files.

                "
            ],
            [
                'title' => "HOW DO I PAY FOR A TOUR AND GET A RECEIPT?
                ",
                'description' =>"When you set up your account, you will recieve an email from newusers@hometakes.com that briefly explains our ordering process.  The email contains a link where you should download our credit card authorization form.  This should be completed and returned prior to your order as we cannot send you an appointment time until we receive your payment info.  You can also download it here by clicking this link.  We only accept credit cards (sorry, no cash or checks).  We accept Visa, Mastercard and American Express.  Your receipt is emailed to you immediatley after you submit your order with the exception of a showcase package if the script has not been completed at the time of your order.  In this is the case, your receipt will be emailed to you after you complete your script. Additons or upgrades to your tour on the day will be billed to your account but not necessarily on the day of the upgrade.
                "
            ],

            [
                'title' => "CAN I REQUEST AN EDIT CHANGE TO THE VIDEO?
                ",
                'description' =>"We developed a 'Hometakes Format' to our tours and before they are sent to the client they are watched to make sure that meet the standards of any of the videos that can be seen on our youtube channel.  If you want changes to a video you may request an edit change.  Edit changes start from $25 on Flythrough packages and $50 on any other package and will be quoted based on the amount of changes needed.  Please note, that we shoot at 30 FPS and videos cannot be slowed down as they will get jittery (stagger) but can be sped up. If a request is to speed up the entire video by say 5%, it will cost the minimum re-edit fee.

                If you would like us to quote you a re-edit of video scenes, such as cutting a scene short, let us know how many you would like us to change.  You must also look at the time counter on the video and quote each scene by the time counter and what needs doing to it.  I.E. the scene begining at 0:38 and ending at 0:52, I'd like it to end at 0:48 as the owner has decided he does not want the portrait of his wife shown in the video. Another example would be instead of the scene beginning at 1:44 through 2:00 please begin it at 1:49.  This also will enable us to provide an exact cost and final custome edit.  

                There's a re-edit fee even for what may seem to only be a 'small change' to a video.  This is because there is no comparison between a photo tour and a video tour.  A video requires human intervention all the way through the process unlike a photo tour where the pushing of one button on the computer does all the work.  Normal photos are around 5mb.  Compare that with a Video file of 5 Gigabytes or more and the difference is a thousand times larger. This can require up to 4 hours in transcoding the (computer processing), editing, and compression for the web and has to happen no matter how small the change.

                "
            ],

            [
                'title' => "WHY DOESN'T THE 'FULL ADDRESS' APPEAR AT THE START OF THE VIDEO.
                ",
                'description' =>"We have a standard format in editing that is followed where we place just the street address at the beginning of the video.  This provides for an uncluttered look on the video.  Theres no reason to put it there because the full address appears on the video template.  Also, as a lot of agents upload the video to their youtube channel and a lot of sellers (and buyers who become the owner) do not want the full address of their property to appear on YouTube.
                "
            ],
            [
                'title' => "DO YOU SUPPORT HTML VIDEO EMBED CODE FIELDS FOR MLS?
                ",
                'description' =>"MLS boards with a specific 'HTML video embed code' field DO NOT support Video Tour Templates and because of that its not available from us.  A video tour template is everything else that surrounds the video such as photo tabs or options such as town tour tabs, amenity tour tabs etc.  However, this DOES NOT mean that your video tour cannot be played on MLS.   You can still view it if you upload the un-branded tour link to the 'virtual tour' field on your MLS listing.  Thats the place where our tours belong on MLS (the 'virtual tour' field).  Some MLS's have a second virtual tour link field for Branded tours.  If you don't know where the 'virtual tour field is, your MLS support staff can assist you with that as well as tell you how to upload photos to your listing .  Just remember to tell the MLS support rep. that you are looking for the 'Virtual Tour' link field and NOT the field for an HTML video embed code.  Its actually better to ask them, how do I upload my 'Virtual Tour' to MLS and don't mention the word 'video' to them as they'll most likely end up telling you that you need an HTML video emded code (which you don't) if you mention the word video.  
                "
            ],
            [
                'title' => "HOW DO I ORDER AND SCHEDULE A TOUR?
                ",
                'description' =>"After you have created your online account, before we can schedule your tour we will need some payment information.  The instructions on how to get this to us are in the 'new user' email that is sent to you after you create an account.  We accept Amex, Visa and MasterCard.  Once we receive this you can log back in and click on the link that says to order/packages and pricing.   Choose your package and then deselect/select your options for that package and click the 'agree to the terms' check box.  Then click the 'Next' button to complete the property information on the next page.  At the bottom of that page, choose 3 times/dates that work for your seller. Please get 3 times from your seller prior to placing your order and please DO NOT fake any of them.  Theres a good reason why we need 3 times as we try to accomodate one of your choices.  If we cannot accomodate any of them due to them already being booked, we will schedule the next available appointment time on the videographers schedule. Please note that if you placed an order but did not send in your payment information, we cannot schedule your tour until we receive it.
                "
            ],
            [
                'title' => "DO YOU OFFER DISCOUNTS FOR LARGER COMPANIES OR VOLUME ORDERING?
                ",
                'description' =>"At Hometakes, we work at as hard as we can to offer the lowest possible pricing to all agents whether working for a small boutique company or a large national company. We work on smaller profit margins but make up for it with high turnover.  Because our margins are smaller, whether we shoot 1 or 100 tours per year for an agent or company, our price remains the same.  We could raise our prices and play the '25% discount - special offer' or 'buy 5 get one free' game, but we'd rather just give you the lowest possible price in the first place.  
                "
            ],
            [
                'title' => "WHAT TIMES CAN I SCHEDULE A TOUR AND CAN I SCHEDULE A SHOOT ON A WEEKEND?
                ",
                'description' =>"Our videographers shoot on Mondays through Friday only and do not shoot on weekends.  Because they work very hard during the week, they need time to 'recharge'.    
                "
            ],
            [
                'title' => "WHAT HAPPENS IF THE WRONG SPELLING OR ADDRESS WAS ENTERED WHEN I ORDERED THE TOUR AND I ONLY JUST NOTICED AFTER THE VIDEO WAS COMPLETED. CAN IT BE CHANGED?
                ",
                'description' =>"There's a $25 re-edit fee to change the street address of the property because the video has to be re-edited.  We do give fair warning on this when you enter the address into the form online (see screen shot below).   If you still made a mistake and entered the wrong address, check your receipt that's emailed to you right after your order and you'll catch it there as the address you just entered shows on your receipt. Then let us know right away and you'll avoid a re-edit fee.
                "
            ],
            [
                'title' => "HOW DO I UPLOAD THE ORIGINAL VIDEO FILE TO MY YOUTUBE AND FACEBOOK ACCOUNTS?
                ",
                'description' =>"If you havent already, you'll need to purchase the original video file for your tour ($10) and download it to your computer.  Then Click here for instructions on how to upload it to YouTube and Click Here for instructions on how to upload it to Facebook."
            ],
            [
                'title' => "CAN I REVIEW THE PHOTOS AND CHECK THE ANGLES TO SEE IF I LIKE WHAT WAS TAKEN?
                ",
                'description' =>"Actually, the agent or representative who meets the videographer must review the photos that were taken on the day of the shoot.  If you don't like an angle or photo taken, now is the time to fix it.  We cannot come back to reshoot any photos without charge, that's why there is a review process.  It is the reviewers responsibility to check that they have all the rooms & angles that they want.  We advise that you make sure that you order  a package that will fit the needs of the property as under ordering the package will most likely result in the seller pointing out that a photo of something they wanted shown is missing.  Retaking photos after the appointment costs $75 return fee plus the cost of each photo.  You may request that the review of the photos take place on the photographers laptop for a full-size view of the photos.  If you choose to review them on the screen on the back of the camera you may not like what you see when the photos are delivered to you.  We strongly advise you to allow the photographer an extra couple of minutes to transfer the photos to their computer and review them there.   If there's an angle or photo you don't like, they will delete it and retake another.  Please understand that Photographers are not Real Estate agents and sometimes can't differentiate between bedrooms, dens, offices etc. so don't assume that they took all the photos you wanted.  We are happy to give you exactly what you want and that's what the review process is for.  If you sent your assistant, partner or another representative to the appointment, they are responsible for reviewing and approving the photos.  If you do not like what they approved, we cannot reshoot without a fee and suggest that the listing agent be there to approve photos on future shoots.  Although this Q&A is here on our web page, it also appeared on our operations guide which was given to you on your first appointment.
                "
            ],
            [
                'title' => "HOW MUCH DOES IT COST TO COME BACK AND RE-SHOOT PHOTOS OR VIDEO?
                ",
                'description' =>"Sometimes we are asked to come back to the property to reshoot photos or video as a room at the property has new furniture or the house color has changed.  We can accomodate that! Theres a re-shoot fee of $75 plus the cost of photos ($10 ea.) or video ($25 ea.).   If you want a re-shoot of the video on a Flythrough package, there's a minimum of 2 video scenes ($50).  A reshoot for Showcase packages has a minimum of 3 video scenes ($75).  Both these minimums include the cost of the re-edit of the video but does not include re-editing of the voice over on the showcase package (re-recording of new voiceover costs $75).  
                "
            ],
            [
                'title' => "CAN HOMETAKES UPLOAD MY PHOTOS OR TOUR LINKS TO MY MLS ACCOUNT AND IF NOT, HOW DO I DO IT?
                ",
                'description' =>'
                MLS asserts that it is prohibited for any members to give out their username and password to a third party.

                If you would like verbal instructions you should call MLS Support for assistance in uploading your tour or photos to MLS (561-627-4548.  Or you can try using these instructions below. 

                Instructions for uploading Your Video Tour to MLS: 

                    From Change Listing screen, click Virtual Tour
                    Then Click Add Virtual Tour
                    Enter the link (including https://) of the un-branded tour
                    
                    Enter the Description or name that you wish to call your tour.
                    Make sure Unbranded Tour is the Type selected
                    
                    Check the check box that says "Open all Virtual Tours in a new window"
                    Click Save Changes
                    If you wish to return to the Change Listing screen without adding the tour, click Return to the edit listing screen.  
                    
                     
                    Instructions for uploading Your Photos to MLS:
                     
                '
            ],
            [
                'title' => "MY GRAPHICS DESIGNER SAYS I NEED PHOTOS WITH 300 DPI BUT YOURS SAY 72 DPI. WHAT CAN I DO?
                ",
                'description' =>"First you need to know that the DPI setting within a digital photo is meaningless in the context of the digital photo itself. You'll understand the fact that a digital photo of say 3,000 x 2,000 pixels with the DPI set to 72 is identical to that same digital photo with the DPI set to 300 (except for those two DPI numbers in the photo). If the only change to those photos was to change the DPI number, then the photos are identical in both size and quality. But, to clarify, let's do some simple arithmetic. 
                
DPI/PPI Printed Size
When a print shop or magazine asks you for a '300 dpi' photo, that request in itself is absolutely meaningless (there is no such thing as a 300 dpi, or any dpi digital photo). What they are asking for is a photo that will print at 300 pixels per inch (and this has nothing directly to do with the DPI setting inside the photo). To know if you have a suitable digital photo for that purpose, you need to know their intended output. If they tell you they need a digital photo that can print at 300 ppi to 7 inches by 5 inches then you can do the math. 
300 ppi x 7 inches = 2,100 pixels and 300 ppi x 5 inches = 1,500 pixels.
So, if you have a digital photo that is greater than or equal to 2,100 x 1,500 pixels, then it will print on a 7 inches x 5 inches sheet at 300 ppi or greater.

We can turn this upside down and ask - if I have a 3,000 pixel wide digital photo and print it at 7 inches - what is the ppi? It's just 3,000 divided by 7 inches = 428.6 ppi. If you print that same photo to 11 inches, it will be printing at 272.7 ppi. It's just simple arithmetic.

To clarify that the DPI setting inside the photo is meaningless in terms of the digital photo itself, if it was set to 300 and you printed the 3,000 pixel wide photo at 7 inches, it will still be printing at 428.6 ppi. It's only meaningful if your software uses it to set the output dimensions, in which case your 3,000 pixel photo will print at 10 inches (at 300 ppi). But if you set the internal DPI of that photo to say 150 (without re-sizing the photo), and printed it at 10 inches, it will still be printing at 300 ppi.

DPI/PPI Digital Size
The size of a digital photo is its pixel dimensions. But how big will it print to paper? Say you have a 3,000 x 2,000 sized digital photo. Let's do the math:

At 300 ppi it will print at 10 inches x 6.7 inches (3,000/300 and 2,000/300)
At 200 ppi it will print at 15 inches x 10 inches (3,000/200 and 2,000/200)
At 100 ppi it will print at 30 inches x 20 inches (3,000/100 and 2,000/100)

DPI to PPI when scanning
This is very simple - 1 scanner 'dot' = 1 pixel. So if you scan say a 7 inches x 5 inches photo at 400 dpi, you'll end up with a 2800 x 2000 pixel size digital image.

Digital Resolution
The resolution of a digital photo are its pixels. The more pixels that cover a specific area, the greater the digital resolution. This is ppi in reverse, that is, the number of pixels that resolve a certain feature. For instance, say you take a picture of a 20 foot wide billboard. If your digital photo is 2,100 pixels wide, then it will be 'resolving' 8.75 pixels per inch (2,100 pixels / 240 inches = 8.75 pixels). In other words, each pixel will represent 0.11 inches of the billboard. If you take the same photo with a camera that creates 6,000 pixels, then it will be resolving 25 pixels per inch. Each pixel will now represent 0.04 inches of the billboard. With more pixels per inch of resolution, more details will be seen and those details will be crisper. A working example today is Google Earth - some sections are covered with higher resolution digital imagery than others. Some some views of the earth are sharp (more pixels) others are blurry (less pixels). 

Required PPI
The figure of 300 ppi to archive 'photographic' quality has been somewhat badly abused - it really depends on the intended output. Output quality from a digital photo is both subjective and non-linear. In terms of subjective - a photo that you send to your relatives need not be as high quality as one for an art magazine. In terms of linearity, a 300 ppi photo is not 2 times the quality of a 150 ppi photo - it's perhaps 30% better (or someone else might say 55% better). Viewing distance is also a factor, a poster (say 4' x 5'), meant to be viewed from a distance of several feet, may only require 75 ppi, whereas that same image printed at 4inches x 5 inches may require 250 ppi to achieve the same subjective quality (since it's meant to be viewed at a distance of 1 foot rather than 6 feet).  

Pixels to DPI or LPI
The printer world works in dots per inch or lines per inch depending on the equipment. They will take your RGB digital photo and convert it to a CMYK printed photo (see color models for explanation of RGB and CMYK). This involves software to rasterize the photo and convert it to CMYK and physical equipment to print it. The printer/magazine should be the ones best aware of the quality of their software and equipment and know how well it can physically print a digital photo. While many stick with the mantra of 300 ppi, the better ones will have evaluated their equipment and will let you know what minimum pixel size of digital image they require.

 

Explanation courtesy of Ken Watson.

                "
            ],
            [
                'title' => "I RECEIVED MY PHOTOS AND TOUR LINKS YET THE PROPERTY STILL SHOWS AS PENDING IN MY ACCOUNT. WHY IS THAT?
                ",
                'description' =>"Throughout our week, our first priority is to send agents their photos and tour links as fast as we can. So we created our workflow to deliver these items first.  Your tour will still show as pending as there are other things that need to be completed on our end.  These items may include sending the original video file (to those that ordered it), uploading the video to our YouTube, Facebook and Twitter accounts or uploading the tour link to Realtor.com.   We can't specify exactly how long these things will take as it depends on how many photos and tours we have to deliver for that week.  Rest assured, we won't forget to complete any other items because we use flowchart so items that need to be completed can't be missed.  Once we have finished every item, the status of your tour will be moved from pending to completed.
                "
            ],
            [
                'title' => "I SEE THE CAMERA PERSON IN A MIRROR ON THE VIDEO. ALSO, THERES GLARE IN THE VIDEO, WHAT CAN BE DONE ABOUT IT?
                ",
                'description' =>"With only a small viewfinder on the camera, it's sometimes hard for the camera person to see their reflections in mirrors as they are normally focused on getting the correct angle or walking shot for the video.  Even harder is when it's not a mirror and just glass or even the reflection from a granite kitchen backsplash or microwave. Sometimes, getting the shot is just unavoidable from getting the reflection in the shot altogether.   Sometimes lens glare from the position of the sun relative to the camera cannot be avoided altogether (you can't exactly ask the sun to move over a bit).  If you feel that a reflection or lens glare spoils the entire shot, just email us and ask us to delete that particular shot and we would be happy to re-edit the video at no charge.
                "
            ],  [
                'title' => "I ONLY WANT TO ORDER AMENITY PHOTOS, NOT THE AMENITY TOUR. IS THAT POSSIBLE?
                ",
                'description' =>"Amenity photos are only available with an amenity video tour. Our packages are just for the home. Photos outside of the home (amenities) are taken when we shoot an amenity video and are purchased separately from our home tour packages. The amenity video is very affordable at just $25 and ground shot photos are no more expensive that if you were to add more photos to your tour package at $10 each.
                "
            ],  [
                'title' => "WHO CAN REQUEST A VIDEO TO BE TAKEN DOWN FROM THE HOMETAKES YOUTUBE CHANNEL?
                ",
                'description' =>"Only the Original Listing Agent that purchased the video tour from us or the owner of the home (as currently shown on the Counties tax record website) can request us to hide the video on YouTube so that if someone searches for your home, it will not show up in the results. If you are the owner, you’ll need to send us a direct link to the tax record that shows your name and address as well as an I.D. or bill that matches the home address.  Sorry, we cannot make exceptions to this requirement.​
                "
            ],  [
                'title' => "CAN YOU CUSTOMIZE AND CHANGE THE TITLE OR TAGS ON VIDEOS YOU UPLOAD TO HOMETAKES'S YOUTUBE, TWITTER OR FACEBOOK ACCOUNTS?
                ",
                'description' =>"We cannot change the format of the title, description or tags of any videos that are uploaded to our social networking sites.  However, you can name or tag them the way you want them on your own social networking sites as long as you purchased the original file. We have a specific format that we have to adhere to in order to keep continuity with the naming and tagging of our tours throughout our social networking sites.
                "
            ],  [
                'title' => "HOW CAN I RESIZE PHOTOS?
                ",
                'description' =>"We process the photos in two sizes, Original and Web size (for your MLS and other websites).  However, if you wish to make different sized files or photo dimensions, we've found a website that can easily help you. It works with Google Chrome or Firefox browsers so be sure to use one of them before you Click Here.  This website will resize your photos without having to download any software.  Whats more, it does it without uploading any of the photos to the website.  We're not quite sure how it does it, but we've tested it and it works!
                "
            ],  [
                'title' => "HOW DOES HOMETAKES PRICING COMPARE TO OTHER TOUR COMPANIES?
                ",
                'description' =>"First a little bit about what we do and what makes us different.  We only take HDR Photos.  Photoshopping gray skies to ‘blue skies’ is a no cost feature. We also add to any photo that shows a T.V or computer monitor an image of the home. We also photoshop the 'lighting up' of fireplaces and photoshop any reflections that show the camera. Our video tour is shot in 4k resolution, edited in 4k and for those with a 4k or 2k retina screens, will playback (online) in both 4K and 2K formats.   We not only stay up to date with the latest in camera technology and drone equipment, but also the way our video and photos are delivered to you. From our tour template, our photo tab will open your photos directly to full screen as when it comes to viewing photos.  When it comes to viewing photos, bigger is ALWAYS better.   So how does our pricing compare?  Look below and you will first the pricing of our closest competitor.   As you will see, the least expensive video and photo package is nearly twice the price of ours - $375.  Ours start at just $199.  We will travel to an appointment for just $99 our lowest photo package.  Their least expensive photo package starts at $185. We really are simply the best value tour company all around.  There are two other sample tour companies from less expensive areas of the country also shown below.
                We offer the best prices around. Just compare!

                "
            ],  [
                'title' => "CAN I REQUEST THAT THE HOMETAKES BRANDING BE REMOVED FROM MY TOUR?
                ",
                'description' =>"Sure you can.  When you order your tour, for $19 you have the option for us to remove the pre-roll at the start of the video, removal of the player link to the right of the player,  removal from the link that appears at the end of the video and removal of the Hometakes Logo/link from all Tour Templates.  Please understand that there has to be a fee for this as this is our product branding and product branding helps all companies grow their brand. The anology being that it would be no different than asking Coca Cola to remove their name from their product if you were buying in Bulk.  The difference being that we are prepared to remove our branding for a small fee where as Coca Cola wont remove theirs for any amount of money.  
                "
            ],  [
                'title' => "I ORDERED A NEW AMENITY TOUR VIDEO. ARE PHOTOS INCLUDED IN THE $25 PRICE?
                ",
                'description' =>"If you ordered an amenity tour video to your home tour video for $25, it does not include any amenity photos.  However, they are available for purchase just as additional photos can be added to any home tour package.  They are $10 each.  Simply ask us for the amenity photo link and we will send it to you.  Tell us which ones you want (by number) and we will send them to you and process payment with your card on file.
                "
            ],  [
                'title' => "CAN I RESELL OR GIVE-AWAY THE TOUR I PURCHASED FROM HOMETAKES TO ANOTHER AGENT/BROKER?
                ",
                'description' =>"The short answer is that you cannot resell or give away any video tour or photos you ordered from us.  It's in our policies and conditions that when you purchase photos or a tour from Hometakes, we retain all rights to them. Essentially when you purchase a tour/photos from us you are licensing them for your life.  For example, if you didn't sell the property and the owner takes the home off the market for a year and then decides to put it back on the market with you, its yours to use again and again.  However, if the home gets listed with another agent and the other agent wants to use the tour, you cannot resell it as its not yours to re-sell or give away.

                Only we can re-sell a home tour.  However, we won't re-sell a tour without the original purchasers permission if the tour is listed within 3 months of the listing expiring or being canceled.  We feel its only good business to ask the previous licensee in case they don't want the new agent to use it.  If the licensee says no, we won't re-sell it to the new listing agent and the new agent will have to pay for a new tour. If the previous licensee is ok with it, then we re-sell the tour at 50% of the original cost of the order.

                "
            ],  [
                'title' => "CAN I RESELL OR GIVE-AWAY THE TOUR I PURCHASED FROM HOMETAKES TO ANOTHER AGENT/BROKER?
                ",
                'description' =>"
                The short answer is that you cannot resell or give away any video tour or photos you ordered from us.  It's in our policies and conditions that when you purchase photos or a tour from Hometakes, we retain all rights to them. Essentially when you purchase a tour/photos from us you are licensing them for your life.  For example, if you didn't sell the property and the owner takes the home off the market for a year and then decides to put it back on the market with you, its yours to use again and again.  However, if the home gets listed with another agent and the other agent wants to use the tour, you cannot resell it as its not yours to re-sell or give away.

                Only we can re-sell a home tour.  However, we won't re-sell a tour without the original purchasers permission if the tour is listed within 3 months of the listing expiring or being canceled.  We feel its only good business to ask the previous licensee in case they don't want the new agent to use it.  If the licensee says no, we won't re-sell it to the new listing agent and the new agent will have to pay for a new tour. If the previous licensee is ok with it, then we re-sell the tour at 50% of the original cost of the order.

                "
            ],  [
                'title' => "HOW DO I UPLOAD A TOUR OR PHOTOS TO MY MLS ACCOUNT?
                ",
                'description' =>"MLS has their own support desk for any questions or advice that you may need regarding the uploading of photos or tours to their system.  Of course we don't know how their website works and that's why we have to direct you to them.  However, we do know that it's a simple process.  If you want MLS support to advise you on how to upload a tour link to your MLS account, please be sure to tell them that you need to know how to upload a tour link and not an embed code.   If you refrain from using the word video with them and say tour or virtual tour, you should get the correct instructions from them.  If you mention video, most of the time, they will incorrectly advise you on how to upload our tour to their system. 
                "
            ],  [
                'title' => "CAN I GET THE ORIGINAL FILE TO THE AMENITY TOUR OR TOWN TOUR?
                ",
                'description' =>"Amenity and Town Tour original files are not available to purchase.  They are available on your tour template when added as an option to your home tour for $25.  However, if you want to place them on your website, you can purchase a yearly license for any of our Amenity or Town Tours for $149 and $249 respectively and we will give you the embed code so that they will play directly off of your website.  You can license a group area of zip codes for $699 or a whole county for $999 per year which includes all of the town and amenity tours for those areas. 
                "
            ],  [
                'title' => "PLUS, PREMIUM AND SUPREME OPTIONS WITH FREE AERIALS
                ",
                'description' =>"Our free drone aerials offered with the plus, premium and supreme options are temporarily unavailable.  Unfortunately, the FAA notified us on May 19th, 2016 that even if we don't charge for our aerials, they still consider them to have been taken for commercial purposes.  Their explanation was the following. 'They are still considered commercial as the photos will serve as an aid in the selling of a home, which yields a profit'.  They also told us that they have notified all the other tour companies in the area too. The FAA expects that they expect the announcement of new rules to be in place at the end of June, 2016. We will be able to offer aerials shortly after an FAA written test.  We apologize for any inconvenience but obviously this is out of our hands.
                "
            ],
            [
                'title' => "WHY DOESN'T MY EMALL RECEIPT HAVE A TOTAL ON IT?
                ",
                'description' =>"We dont total your receipt because a lot of agents sometimes upgrade items to their tours on the day and that would change your the total that will be charged to your credit card.  If you do upgrade on the day of the shoot, an upgrade charge sheet will appear in your account.
                "
            ], [
                'title' => "WHY DOESN'T THE VIDEO LOOK LIKE THE PHOTOS?
                ",
                'description' =>"The above video shows what happens when you point a video camera from the inside of a room toward a window and then back into the room.  The camera has to adjust for the differences in in light that the lens sees.  When it is facing toward brighter outside light, it adjusts to see outside the window creating  the inside to be darker. If you pause the video between 7 and 8 seconds, you will clearly see the inside dark before the video re-adjusts for the inside light and gets bright once again.  This is when sometimes the inside of a home will always appear darker than the photos.  Photos,  photography is vastly different to video and videography.

                To better understand this, comntinue to read on and we'll give you an insight on how all cameras work versus what our eyes see.  Eyes have a 'high dynamic range, HDR for short.  This means that they have ability to see both bright areas and dark areas at the same time.  A camera does not.  It can either see one or the other at any one time.  Their 'dynamic range' is way way lower than the human eye.  So how is it that you can get photos to show balanced light inside and outside of a home at the same time?  Well they dont.  Its done by multiple photos taken at different exposures to capture the dark and light areas of a scene and which are blended together in software using a process which everyone is now familiar with, 'HDR Photo Preocessing'.  Hence, the name HDR photos.  Currently, there is no technology that exists to be able to do this for video.

                You have two choices to set the exposure when takin video.  Manual or Automatic.  With manual exposure, you set it to light to see inside a room ir dark if you want to see what is outside the window.  These permanant settings.  What do we mean by permanant.  Well, if the exposure is set to dark, although you'd be able to see outside the window, the room would be very dark.  When set to light, you'd be able to see clearly inside the room but with windows would appear so bright that you won't see the outside.   This is known as window 'white out' or 'window blowout.' 

                When the camera is on auto exposure this setting doesnt allow either one of these scenarios to be permanant.  The video wont go extremly dark, but it also wont go very bright as the camera adjusts the exposure constantly to what is sees in the overall frame.  This is the setting that we do use so that there are no extremes of darkness or brightness.  And for view shots, we can pan from outside to inside the room to capture the view.

                However, you may have see videos where none of the above thats been said applies.  This is due to a set of circumstances coming together at the time of the shoot as well as the amount and size of windows on the home.  Heres an example: A very overcast day , a covered patio with the sun is on the other side of the home creating an even exposure between the outside and inside light. .   The results being that you can see the outside and the inside on the video at the same time.  This is the reason why you cant compare one video to another.   Different homes have differnet exposure variances do to room size, window size, position of the room in relation to the sun, sunny day, cloudy day or anything in-between.

                "
            ], [
                'title' => "CAN I GET AN EMBED CODE OF MY TOUR?
                ",
                'description' =>"Yes you can. Just shoot us an email and we will supply you with the embed code from YouTube.  We do not give out embed codes from Vimeo as we delete the videos from our Vimeo account after 1 year due to space on our account as Vimeo has a storage limitation even on business accounts. If we gave you the vimeo embed code,  the video could no longer be seen on the website you embeded it on after one year.
                "
            ],
            [
                'title' => "WHY DOES HOMETAKES CHARGE TO HOST MY 3D TOUR AFTER 60 DAYS?
                ",
                'description' =>"In short, as all aspects of the 3D Tour is controlled by Matterport, they charge the Tour Provider (us) for hosting their product.  At Hometakes, all 3D Tours come with 60 days free hosting.  Other companies that provide Matterport Tours in Florida sometimes dont charge for hosting (until after a year).  So why do we?  Here's the simple answer:  We havent found one Matterport Tour provider in Florida that comes close to our pricing when a 3D Tour is ordered as an option to a package which starts at only $99.  We discount them with a minimum of 50% off of our normal pricing when ordered this way.  

                Even as a stand alone order, we are still  cheaper than our closest competitor (ours starts at $199 as a stand alone order, theirs $375).  One of the reasons that we dont build in the price of hosting is simply because we know that you may sell the property within 60 days, so wouldnt you rather pay for the hosting only if you need it?  If you need additional hosting after your free 60 day period it can be purchased for  $35 (90 days), $55 (180 days) or $79 (360 days).  Even with the additional hosting time, we are still way less expensive that any other Matterport service provider we have seen in Florida.  

                "
            ],[
                'title' => "CAN I DOWNLOAD MY 3D TOUR TO MY IPAD OR IPHONE?
                ",
                'description' =>"Currently Andoid users can only see the tours in VR which the tour is available offline with Matterports Google Cardboard App, but Matterport says that they have something forthcoming for Android phones and tablets. 3D Showcase for iOS is actaully one of the best ways to present your 3D Tour if on a listing presentation and yount dont want to rely on anr internet connection.  By having a tour downloaded to your phone, you can enter every presentation with confidence, knowing your Tour will load quickly and that your audience will be wowed by the responsive, immersive experience of the 3D Tour.  To get started you must first download the App.  Go to the App store and search Matterport 3D Showcase and download the App. Once on your device, you'll be able to download all of your 3D Tours.

                In order to download a tour, you'll then need your tour ID for the property.  Simply email us the property address of the 3D Tour and we will email you the tour ID.  After opening the App, tap the icloud button on the bottom right side of the app.  You do not need an account to download the tour so ignore the login screen.  Simply tap the magnifying glass on the top right side of the screen and enter the Tour ID.  Make sure that you enter the Tour ID in the upper and lower case letters as the Tour ID number is case sensative. Then tap the blue search button on your device. It may take a while to find your tour, please be patient while it searches.  Once found, your tour will appear on screen.  It may say 'no search results' yet still show the property address.  This is an error on Matterports App but dont worry, you are still able to download the tour.  On the right of the property address, you will see a cloud icon with an arrow pointing down.  Click that and your tour will start to download. This may take a while depending on your internet connection. We recommed using a wi-fi connection with a good download speed and not your data connection.   Once it's on your phone, unless you delete it you'll have it for the life.  

                Please note, that once your Matterport Tour Hosting has expired with us, you will not be able to find the tour on the App as it is deleted from Matterports server.  For that reason, we strongly encourage you to download the tour as soon as you recieve your tour.

Here are two testomies from clients of 3D Tours:  

“The major advantage of 3D Showcase for iOS is I can show customers examples anytime and anywhere without having to worry about connectivity. The speed of the demo is fantastic.” Gary Snyder.  

“3D Showcase for iOS is a HUGE bonus to me. It takes all that hassle of mobile tethering my phone and worrying about battery power and reliability away. I can just focus on the customer and am assured that they are having a great experience with no lag or loading to worry about.”
                "
            ]



        ];
      
        // $faqlist = $faq->filter(function ($value, $key) {
        //     return $value->title ;
        // });
        // $input = Input::get();
        // $searchdatahtml = $input['searchfaq'];
        // $collectdata = collect($faqlist);
        // $searchdata = $collectdata->filter(function ($value, $key) {
        //     return data_get($value, $input) ;
        // });
        // $name = $request->input('searchfaq');
        // dd($name );
        return view('website.faq',['faqlist'=> $faqlist ]);

    }
}