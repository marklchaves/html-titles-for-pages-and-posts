# HTML Titles For Pages And Posts Plugin

Contributors: mark l chaves

Donate link: https://ko-fi.com/marklchaves

Tags: wordpress,title,page,post,html,custom

Requires at least: 5.3.2

Tested up to: 5.4.2

---

**Allows custom titles with HTML for pages and posts.**

---

## Installation

1. Download the [zip file](https://github.com/marklchaves/html-titles-for-pages-and-posts/blob/master/html-titles-for-pages-and-posts.zip). 
1. Use the wp-admin > **Plugins > Add New** to upload the zip or manually upload the **contents** of the zip file to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress. 

---

## Usage

1. Add a custom field to your post or page.
1. Name the custom field `HTML_title`.
1. Add your custom title with HTML to the value field. See the example markup below.

```html
<span style="background-color: gold; color: black; font-size:1.5em; font-weight:500;">Goin' to </span><span style="background-color: black; color: gold; font-size:1.5em; font-weight:500;">California</span>
```

### Accepted Markup

- `<strong></strong>`
- `<em></em>`     
- `<b></b>`      
- `<i></i>`      
- `<span></span>` with attributes
    - `class` 
    - `style` 

The default title with no markup is displayed if there is no `HTML_title` custom field for a page or post.

---

## Screengrabs

![Example result](https://raw.githubusercontent.com/marklchaves/html-titles-for-pages-and-posts/master/screengrabs/html-titles-for-pages-and-posts-screengrab-1280w.jpg "Example result")

---

### I'll Drink to That ;-)

[![ko-fi](https://www.ko-fi.com/img/githubbutton_sm.svg)](https://ko-fi.com/D1D7YARD)
