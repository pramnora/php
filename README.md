# php
php/hypertext preprocessor programming code

## PHP Uses

PHP code files end in filename extension: [.php]/for example: [index.php].   

PHP, is a web server *back end* programming language.../  
this means the PHP code is, essentially, 'hidden';     
when the **server** gets a browser request...; and, then, PHP sends code out to the **client** web browser...;      
none of the PHP code is, actually, visible...whenever you choose to *view source*...;      
but, instead, the web browser only just sees what is a mixture of: HTML/CSS/Javascript, alone.  

- PHP, is widely used for building web pages/serving up web sites.  
- It can be used to do maths/perform calculations.  
- Deals with form/data collection...deal with data processing.   
- It's also used to communicate with databases: MySQL, to both 'store/retrieve' data.    
- It can output: text/graphics/programs/-etc.    

Basically, just like any other programming language...;  
whatever uses the programmer chooses to put it to...is entirely up to themselves/  
and, what happens to be the limits of their own 'imagination';    
also, is based on what that particular programming language either can/or else, can't do.  

**NOTE**: There are many different versions of PHP...I believe, the latest version is 8.  

-(Because, I'm **not** an *expert* in this language; but, only a mere *beginner*; therefore, I can hardly claim to be able to explain what the differences between these versions are...?!)-  

## Installing PHP on Linux Ubuntu...

> apt-get install php  
> which php  
> /user/bin/php  

## Simple example PHP program codes...

### PHP code delimiters: &lt;?php/?&gt;   

> &lt;?php  
> -(PHP script code goes inside here...)-   
> ?&gt;  


### PHP Code comments

> // This is a PHP single line comment 
 
> (#) This is a PHP  single line comment    

-(**NOTE**: Take off the pair of parenthesis brackets around the hash symbol/Markdown displays it as a Header.)-  

> /* This is  
>    a PHP  
>    multi-line comment */  

### Hello, world!

#### Print string literal...

> &lt;?php  
> echo "Hello, world!"    
> ?&gt;    
> Hello, world!  

#### Print string variable...

> &lt;?php  
> $text="Hello, world!";  
> echo $text;  
> ?&gt;    
> Hello, world!     

#### Print using a function...

> &lt;?php  
> function printText(){  
>   echo "Hello, world!";  
> }  
> printText();  
> ?&gt;     
> Hello, world!      

**NOTE(1)** Variable names in PHP are preceeded by a dollar sign symbol: ($).  

**NOTE(2)**: When you are writing *multiple* lines of PHP code...it's important to place a semi-colon symbol: (;)...at the end of each line;  
so, that the PHP program can know this is where the line of exectuable code ends; otherwise, your program will have **error** messages!

### Initialise variable/print out it's value/print out variable value, plus, it''s type...

> &lt;?php  
> $x=1;  
> echo $x;     
> var_dump($x);   
> ?&gt;      
> 1    
> int(1)   

### Add 2 numbers

> &lt;?php  
> $num1=1;    
> $num2=2;   
> $sumTotal=$num1+$num2;    
> echo $sumTotal;    
> ?&gt;    
> 3  

### Loop

> &lt;?php    
> for ($num=1;$num<3;$num++){      
>  echo $num."&lt;br&gt;";    
> }      
> 1  
> 2  
> 3    

**NOTE**: PHP code can be intermixed with HTML codes...such as the vertical line feed: '<br>'...; by using the period dot (.) which functions as a concatenation operator.   

## Links

PHP Main site...  
- https://www.php.net

## PHP Tutorials

### Online

W3Schools...  
- https://www.w3schools.com/php/default.asp  


