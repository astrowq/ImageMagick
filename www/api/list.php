



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1,shrink-to-fit=no" >
  <title>MagickCore, C API: Working with Image Lists @ ImageMagick</title>
  <meta name="application-name" content="ImageMagick">
  <meta name="description" content="Use ImageMagick® to create, edit, compose, or convert bitmap images. You can resize your image, crop it, change its shades and colors, add captions, among other operations.">
  <meta name="application-url" content="https://imagemagick.org">
  <meta name="generator" content="PHP">
  <meta name="keywords" content="magickcore, c, api:, working, with, image, lists, ImageMagick, PerlMagick, image processing, image, photo, software, Magick++, OpenMP, convert">
  <meta name="rating" content="GENERAL">
  <meta name="robots" content="INDEX, FOLLOW">
  <meta name="generator" content="ImageMagick Studio LLC">
  <meta name="author" content="ImageMagick Studio LLC">
  <meta name="revisit-after" content="2 DAYS">
  <meta name="resource-type" content="document">
  <meta name="copyright" content="Copyright (c) 1999-2017 ImageMagick Studio LLC">
  <meta name="distribution" content="Global">
  <meta name="magick-serial" content="P131-S030410-R485315270133-P82224-A6668-G1245-1">
  <meta name="google-site-verification" content="_bMOCDpkx9ZAzBwb2kF3PRHbfUUdFj2uO8Jd1AXArz4">
  <link href="list.php" rel="canonical">
  <link href="https://imagemagick.org/image/wand.png" rel="icon">
  <link href="https://imagemagick.org/image/wand.ico" rel="shortcut icon">
  <link href="https://imagemagick.org/assets/magick-css.php" rel="stylesheet">
</head>
<body>
  <header>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="https://imagemagick.org/"><img class="d-block" id="icon" alt="ImageMagick" width="32" height="32" src="https://imagemagick.org/image/wand.ico"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarsExampleDefault" style="">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="https://imagemagick.org/index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="https://imagemagick.org/script/download.php">Download</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="https://imagemagick.org/script/command-line-tools.php">Tools</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="https://imagemagick.org/script/command-line-processing.php">Command-line</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="https://imagemagick.org/script/resources.php">Resources</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="https://imagemagick.org/script/develop.php">Develop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" target="_blank" href="../discourse-server">Community</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="../script/search.php">
      <input class="form-control mr-sm-2" type="text" name="q" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="sa">Search</button>
    </form>
    </div>
  </nav>
  <div class="container">
   <script async="async" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-3129977114552745"
         data-ad-slot="6345125851"
         data-ad-format="auto"></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
    </script>

  </div>
  </header>
  <main class="container">
    <div class="magick-template">
<div class="magick-header">
<p class="text-center"><a href="list.php#AppendImageToList">AppendImageToList</a> &bull; <a href="list.php#CloneImageList">CloneImageList</a> &bull; <a href="list.php#CloneImages">CloneImages</a> &bull; <a href="list.php#DeleteImageFromList">DeleteImageFromList</a> &bull; <a href="list.php#DeleteImages">DeleteImages</a> &bull; <a href="list.php#DestroyImageList">DestroyImageList</a> &bull; <a href="list.php#DuplicateImages">DuplicateImages</a> &bull; <a href="list.php#GetFirstImageInList">GetFirstImageInList</a> &bull; <a href="list.php#GetImageFromList">GetImageFromList</a> &bull; <a href="list.php#GetImageIndexInList">GetImageIndexInList</a> &bull; <a href="list.php#GetImageListLength">GetImageListLength</a> &bull; <a href="list.php#GetLastImageInList">GetLastImageInList</a> &bull; <a href="list.php#GetNextImageInList">GetNextImageInList</a> &bull; <a href="list.php#GetPreviousImageInList">GetPreviousImageInList</a> &bull; <a href="list.php#ImageListToArray">ImageListToArray</a> &bull; <a href="list.php#InsertImageInList">InsertImageInList</a> &bull; <a href="list.php#NewImageList">NewImageList</a> &bull; <a href="list.php#PrependImageToList">PrependImageToList</a> &bull; <a href="list.php#RemoveImageFromList">RemoveImageFromList</a> &bull; <a href="list.php#RemoveFirstImageFromList">RemoveFirstImageFromList</a> &bull; <a href="list.php#RemoveLastImageFromList">RemoveLastImageFromList</a> &bull; <a href="list.php#ReplaceImageInList">ReplaceImageInList</a> &bull; <a href="list.php#ReplaceImageInListReturnLast">ReplaceImageInListReturnLast</a> &bull; <a href="list.php#ReverseImageList">ReverseImageList</a> &bull; <a href="list.php#SpliceImageIntoList">SpliceImageIntoList</a> &bull; <a href="list.php#SplitImageList">SplitImageList</a></p>

<h2><a href="http://imagemagick.org/api/MagickCore/list_8c.html" id="AppendImageToList">AppendImageToList</a></h2>

<p>AppendImageToList() appends the second image list to the end of the first list.  The given image list pointer is left unchanged, unless it was empty.</p>

<p>The format of the AppendImageToList method is:</p>

<pre class="text">
AppendImageToList(Image *images,const Image *image)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>images</dt>
<dd>the image list to be appended to. </dd>

<dd> </dd>
<dt>image</dt>
<dd>the appended image or image list. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://imagemagick.org/api/MagickCore/list_8c.html" id="CloneImageList">CloneImageList</a></h2>

<p>CloneImageList() returns a duplicate of the image list.</p>

<p>The format of the CloneImageList method is:</p>

<pre class="text">
Image *CloneImageList(const Image *images,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>images</dt>
<dd>the image list. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://imagemagick.org/api/MagickCore/list_8c.html" id="CloneImages">CloneImages</a></h2>

<p>CloneImages() clones one or more images from an image sequence, using a comma separated list of image numbers or ranges.</p>

<p>The numbers start at 0 for the first image in the list, while negative numbers refer to images starting counting from the end of the range. Images may be referred to multiple times to clone them multiple times. Images referred beyond the available number of images in list are ignored.</p>

<p>Images referenced may be reversed, and results in a clone of those images also being made with a reversed order.</p>

<p>The format of the CloneImages method is:</p>

<pre class="text">
Image *CloneImages(const Image *images,const char *scenes,
  ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>images</dt>
<dd>the image sequence. </dd>

<dd> </dd>
<dt>scenes</dt>
<dd>This character string specifies which scenes to clone (e.g. 1,3-5,7-3,2). </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://imagemagick.org/api/MagickCore/list_8c.html" id="DeleteImageFromList">DeleteImageFromList</a></h2>

<p>DeleteImageFromList() deletes an image from the list. List pointer is moved to the next image, if one is present. See RemoveImageFromList().</p>

<p>The format of the DeleteImageFromList method is:</p>

<pre class="text">
DeleteImageFromList(Image **images)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>images</dt>
<dd>the image list. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://imagemagick.org/api/MagickCore/list_8c.html" id="DeleteImages">DeleteImages</a></h2>

<p>DeleteImages() deletes one or more images from an image sequence, using a comma separated list of image numbers or ranges.</p>

<p>The numbers start at 0 for the first image, while negative numbers refer to images starting counting from the end of the range. Images may be referred to multiple times without problems. Image referred beyond the available number of images in list are ignored.</p>

<p>If the referenced images are in the reverse order, that range will be completely ignored, unlike CloneImages().</p>

<p>The format of the DeleteImages method is:</p>

<pre class="text">
DeleteImages(Image **images,const char *scenes,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>images</dt>
<dd>the image sequence. </dd>

<dd> </dd>
<dt>scenes</dt>
<dd>This character string specifies which scenes to delete (e.g. 1,3-5,-2-6,2). </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://imagemagick.org/api/MagickCore/list_8c.html" id="DestroyImageList">DestroyImageList</a></h2>

<p>DestroyImageList() destroys an image list.</p>

<p>The format of the DestroyImageList method is:</p>

<pre class="text">
Image *DestroyImageList(Image *image)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image sequence. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://imagemagick.org/api/MagickCore/list_8c.html" id="DuplicateImages">DuplicateImages</a></h2>

<p>DuplicateImages() duplicates one or more images from an image sequence, using a count and a comma separated list of image numbers or ranges.</p>

<p>The numbers start at 0 for the first image, while negative numbers refer to images starting counting from the end of the range. Images may be referred to multiple times without problems. Image referred beyond the available number of images in list are ignored.</p>

<p>The format of the DuplicateImages method is:</p>

<pre class="text">
Image *DuplicateImages(Image *images,const size_t number_duplicates,
  const char *scenes,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>images</dt>
<dd>the image sequence. </dd>

<dd> </dd>
<dt>number_duplicates</dt>
<dd>duplicate the image sequence this number of times. </dd>

<dd> </dd>
<dt>scenes</dt>
<dd>This character string specifies which scenes to duplicate (e.g. 1,3-5,-2-6,2). </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://imagemagick.org/api/MagickCore/list_8c.html" id="GetFirstImageInList">GetFirstImageInList</a></h2>

<p>GetFirstImageInList() returns a pointer to the first image in the list.</p>

<p>The format of the GetFirstImageInList method is:</p>

<pre class="text">
Image *GetFirstImageInList(const Image *images)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>images</dt>
<dd>the image list. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://imagemagick.org/api/MagickCore/list_8c.html" id="GetImageFromList">GetImageFromList</a></h2>

<p>GetImageFromList() returns an image at the specified index from the image list. Starting with 0 as the first image in the list.</p>

<p>A negative offset will return the image from the end of the list, such that an index of -1 is the last image.</p>

<p>If no such image exists at the specified offset a NULL image pointer is returned.  This will only happen if index is less that the negative of the list length, or larger than list length -1.  EG: ( -N to N-1 )</p>

<p>The format of the GetImageFromList method is:</p>

<pre class="text">
Image *GetImageFromList(const Image *images,const ssize_t index)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>images</dt>
<dd>the image list. </dd>

<dd> </dd>
<dt>index</dt>
<dd>the position within the list. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://imagemagick.org/api/MagickCore/list_8c.html" id="GetImageIndexInList">GetImageIndexInList</a></h2>

<p>GetImageIndexInList() returns the offset in the list of the specified image.</p>

<p>The format of the GetImageIndexInList method is:</p>

<pre class="text">
ssize_t GetImageIndexInList(const Image *images)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>images</dt>
<dd>the image list. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://imagemagick.org/api/MagickCore/list_8c.html" id="GetImageListLength">GetImageListLength</a></h2>

<p>GetImageListLength() returns the length of the list (the number of images in the list).</p>

<p>The format of the GetImageListLength method is:</p>

<pre class="text">
size_t GetImageListLength(const Image *images)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>images</dt>
<dd>the image list. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://imagemagick.org/api/MagickCore/list_8c.html" id="GetLastImageInList">GetLastImageInList</a></h2>

<p>GetLastImageInList() returns a pointer to the last image in the list.</p>

<p>The format of the GetLastImageInList method is:</p>

<pre class="text">
Image *GetLastImageInList(const Image *images)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>images</dt>
<dd>the image list. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://imagemagick.org/api/MagickCore/list_8c.html" id="GetNextImageInList">GetNextImageInList</a></h2>

<p>GetNextImageInList() returns the next image in the list.</p>

<p>The format of the GetNextImageInList method is:</p>

<pre class="text">
Image *GetNextImageInList(const Image *images)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>images</dt>
<dd>the image list. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://imagemagick.org/api/MagickCore/list_8c.html" id="GetPreviousImageInList">GetPreviousImageInList</a></h2>

<p>GetPreviousImageInList() returns the previous image in the list.</p>

<p>The format of the GetPreviousImageInList method is:</p>

<pre class="text">
Image *GetPreviousImageInList(const Image *images)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>images</dt>
<dd>the image list. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://imagemagick.org/api/MagickCore/list_8c.html" id="ImageListToArray">ImageListToArray</a></h2>

<p>ImageListToArray() is a convenience method that converts an image list to a sequential array, with a NULL image pointer at the end of the array.</p>

<p>The images remain part of the original image list, with the array providing an alternative means of indexing the image array.</p>

<p>group = ImageListToArray(images, exception); while (i = 0; group[i] != (Image *) NULL; i++) printf("s\n", group[i]-&gt;filename); printf("d images\n", i); group = RelinquishMagickMemory(group);</p>

<p>The format of the ImageListToArray method is:</p>

<pre class="text">
Image **ImageListToArray(const Image *images,ExceptionInfo *exception)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>image</dt>
<dd>the image list. </dd>

<dd> </dd>
<dt>exception</dt>
<dd>return any errors or warnings in this structure. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://imagemagick.org/api/MagickCore/list_8c.html" id="InsertImageInList">InsertImageInList</a></h2>

<p>InsertImageInList() insert the given image or image list, into the first image list, immediately AFTER the image pointed to.  The given image list pointer is left unchanged unless previously empty.</p>

<p>The format of the InsertImageInList method is:</p>

<pre class="text">
InsertImageInList(Image **images,Image *insert)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>images</dt>
<dd>the image list to insert into. </dd>

<dd> </dd>
<dt>insert</dt>
<dd>the image list to insert. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://imagemagick.org/api/MagickCore/list_8c.html" id="NewImageList">NewImageList</a></h2>

<p>NewImageList() creates an empty image list.</p>

<p>The format of the NewImageList method is:</p>

<pre class="text">
Image *NewImageList(void)
</pre>

<h2><a href="http://imagemagick.org/api/MagickCore/list_8c.html" id="PrependImageToList">PrependImageToList</a></h2>

<p>PrependImageToList() prepends the image to the beginning of the list.</p>

<p>The format of the PrependImageToList method is:</p>

<pre class="text">
PrependImageToList(Image *images,Image *image)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>images</dt>
<dd>the image list. </dd>

<dd> </dd>
<dt>image</dt>
<dd>the image. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://imagemagick.org/api/MagickCore/list_8c.html" id="RemoveImageFromList">RemoveImageFromList</a></h2>

<p>RemoveImageFromList() removes and returns the image pointed to.</p>

<p>The given image list pointer is set to point to the next image in list if it exists, otherwise it is set to the previous image, or NULL if list was emptied.</p>

<p>The format of the RemoveImageFromList method is:</p>

<pre class="text">
Image *RemoveImageFromList(Image **images)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>images</dt>
<dd>the image list. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://imagemagick.org/api/MagickCore/list_8c.html" id="RemoveFirstImageFromList">RemoveFirstImageFromList</a></h2>

<p>RemoveFirstImageFromList() removes and returns the first image in the list.</p>

<p>If the given image list pointer pointed to the removed first image, it is set to the new first image of list, or NULL if list was emptied, otherwise it is left as is.</p>

<p>The format of the RemoveFirstImageFromList method is:</p>

<pre class="text">
Image *RemoveFirstImageFromList(Image **images)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>images</dt>
<dd>the image list. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://imagemagick.org/api/MagickCore/list_8c.html" id="RemoveLastImageFromList">RemoveLastImageFromList</a></h2>

<p>RemoveLastImageFromList() removes and returns the last image from the list.</p>

<p>If the given image list pointer pointed to the removed last image, it is set to the new last image of list, or NULL if list was emptied, otherwise it is left as is.</p>

<p>The format of the RemoveLastImageFromList method is:</p>

<pre class="text">
Image *RemoveLastImageFromList(Image **images)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>images</dt>
<dd>the image list. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://imagemagick.org/api/MagickCore/list_8c.html" id="ReplaceImageInList">ReplaceImageInList</a></h2>

<p>ReplaceImageInList() replaces an image in the list with the given image, or list of images.  Old image is destroyed.</p>

<p>The images list pointer is set to point to the first image of the inserted list of images.</p>

<p>The format of the ReplaceImageInList method is:</p>

<pre class="text">
ReplaceImageInList(Image **images,Image *replace)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>images</dt>
<dd>the list and pointer to image to replace </dd>

<dd> </dd>
<dt>replace</dt>
<dd>the image or image list replacing the original </dd>

<dd>  </dd>
</dl>
<h2><a href="http://imagemagick.org/api/MagickCore/list_8c.html" id="ReplaceImageInListReturnLast">ReplaceImageInListReturnLast</a></h2>

<p>ReplaceImageInListReturnLast() is exactly as ReplaceImageInList() except the images pointer is set to the last image in the list of replacement images.</p>

<p>This allows you to simply use GetNextImageInList() to go to the image that follows the just replaced image, even if a list of replacement images was inserted.</p>

<p>The format of the ReplaceImageInList method is:</p>

<pre class="text">
ReplaceImageInListReturnLast(Image **images,Image *replace)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>images</dt>
<dd>the list and pointer to image to replace </dd>

<dd> </dd>
<dt>replace</dt>
<dd>the image or image list replacing the original </dd>

<dd>  </dd>
</dl>
<h2><a href="http://imagemagick.org/api/MagickCore/list_8c.html" id="ReverseImageList">ReverseImageList</a></h2>

<p>ReverseImageList() reverses the order of an image list. The list pointer is reset to that start of the re-ordered list.</p>

<p>The format of the ReverseImageList method is:</p>

<pre class="text">
void ReverseImageList(Image **images)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>images</dt>
<dd>the image list. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://imagemagick.org/api/MagickCore/list_8c.html" id="SpliceImageIntoList">SpliceImageIntoList</a></h2>

<p>SpliceImageIntoList() removes 'length' images from the list and replaces them with the specified splice. Removed images are returned.</p>

<p>The format of the SpliceImageIntoList method is:</p>

<pre class="text">
SpliceImageIntoList(Image **images,const size_t,
  const Image *splice)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>images</dt>
<dd>the image list. </dd>

<dd> </dd>
<dt>length</dt>
<dd>the length of the image list to remove. </dd>

<dd> </dd>
<dt>splice</dt>
<dd>Replace the removed image list with this list. </dd>

<dd>  </dd>
</dl>
<h2><a href="http://imagemagick.org/api/MagickCore/list_8c.html" id="SplitImageList">SplitImageList</a></h2>

<p>SplitImageList() splits an image into two lists, after given image The list that was split off is returned, which may be empty.</p>

<p>The format of the SplitImageList method is:</p>

<pre class="text">
Image *SplitImageList(Image *images)
</pre>

<p>A description of each parameter follows:</p>

<dd>
</dd>

<dd> </dd>
<dl class="dl-horizontal">
<dt>images</dt>
<dd>the image list. </dd>

<dd>  </dd>
</dl>
</div>
    </div>
  </main><!-- /.container -->
  <footer class="magick-footer">
    <p><a href="https://imagemagick.org/script/security-policy.php">Security</a> •
    <a href="https://imagemagick.org/script/architecture.php">Architecture</a> •
    <a href="https://imagemagick.org/script/links.php">Related</a> •
     <a href="https://imagemagick.org/script/sitemap.php">Sitemap</a>
    &nbsp; &nbsp;
    <a href="list.php#"><img class="d-inline" id="wand" alt="And Now a Touch of Magick" width="16" height="16" src="https://imagemagick.org/image/wand.ico"/></a>
    &nbsp; &nbsp;
    <a href="http://pgp.mit.edu/pks/lookup?op=get&amp;search=0x89AB63D48277377A">Public Key</a> •
    <a href="https://imagemagick.org/script/support.php">Donate</a> •
    <a href="https://imagemagick.org/script/contact.php">Contact Us</a>
    <br/>
    <small>© 1999-2019 ImageMagick Studio LLC</small></p>
  </footer>

  <!-- Javascript assets -->
  <script src="https://imagemagick.org/assets/magick-js.php" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><\/script>')</script>
</body>
</html>
<!-- Magick Cache 27th December 2018 03:19 -->