---
title: Button CSS
description: A micro-css framework for buttons only.
slug: index
published: 2024-03-23
updated: 2024-03-23
---

Button CSS provides a 5kb stylesheet containing css for buttons only and nothing else.

This CSS micro-framework basically provides a set of pre-defined button styles with customizable options for various use cases. It includes styles for buttons of three different sizes, five colors, and outline variations.

[See Documentation](#docs){.button .button-blue .rounded}

{#docs}
## USAGE

To use this micro-framework, simply include the provided CSS code in your project. Then, apply the appropriate classes to your HTML elements to achieve the desired button styles.

### Via CDN

You can use our CDN:

```html
<!--minified CDN-->
<link rel="stylesheet" href="https://upscwiki.blr1.cdn.digitaloceanspaces.com/buttoncss/button.min.css">

<!--unminified CDN-->
<link rel="stylesheet" href="https://upscwiki.blr1.cdn.digitaloceanspaces.com/buttoncss/button.css">
```

### Download

If you prefer downloading the css, we have provided the button below.

[Download](/download/buttoncss.zip){.button .button-black .rounded}

## BUTTON CLASSES

### Basic Button Styles

#### `.button`
- Provides basic styling for buttons.
- Applies consistent padding, border, and text color.
- Suitable for general button use cases.


```html
<a href="#" class="button button-red">A NORMAL red button</a>
```
<a href="#" class="button button-red">A NORMAL red button</a>

#### Rounded or Not Rounded

Use the class `.rounded` to make a button rounded.

```html
<a href="#" class="button button-black rounded">A ROUNDED button</a>
<a href="#" class="button button-black">NOT-ROUNDED button</a>
```
<a href="#" class="button button-black rounded">A ROUNDED button</a>
<a href="#" class="button button-black">NOT-ROUNDED button</a>

#### `.button-sm`
- Provides styling for small-sized buttons.
- Smaller padding compared to the basic button style.
- Suitable for buttons requiring less visual prominence.

```html
<a href="#" class="button button-sm button-red">A SMALL red button</a>
```
<a href="#" class="button button-sm button-red">A SMALL red button</a>

#### `.button-lg`
- Provides styling for large-sized buttons.
- Larger padding compared to the basic button style.
- Suitable for buttons requiring increased visual prominence.


```html
<a href="#" class="button button-lg button-red">A LARGE red button</a>
```
<a href="#" class="button button-lg button-red">A LARGE red button</a>

### Button Colors

#### `.button-red`
- Applies red color scheme to the button.
- Suitable for indicating danger or critical actions.


```html
<a href="#" class="button button-red">A red button</a>
```
<a href="#" class="button button-red">A red button</a>

#### `.button-blue`
- Applies blue color scheme to the button.
- Suitable for indicating primary actions or links.

```html
<a href="#" class="button button-blue">A blue button</a>
```
<a href="#" class="button button-blue">A blue button</a>

#### `.button-green`
- Applies green color scheme to the button.
- Suitable for indicating success or positive actions.

```html
<a href="#" class="button button-green">A green button</a>
```
<a href="#" class="button button-green">A green button</a>

#### `.button-yellow`
- Applies yellow color scheme to the button.
- Suitable for indicating warnings or attention-seeking actions.

```html
<a href="#" class="button button-yellow">A yellow button</a>
```
<a href="#" class="button button-yellow">A yellow button</a>

#### `.button-black`
- Applies black color scheme to the button.
- Suitable for creating buttons with dark color scheme.

```html
<a href="#" class="button button-black">A black button</a>
```
<a href="#" class="button button-black">A black button</a>

### Button Outline Styles

#### `.button-red-outline`
- Applies red outline with transparent background to the button.
- Suitable for creating outlined buttons with red color.

```html
<a href="#" class="button button-red-outline">A red button with OUTLINE</a>
```
<a href="#" class="button button-red-outline">A red button with OUTLINE</a>

#### `.button-blue-outline`
- Applies blue outline with transparent background to the button.
- Suitable for creating outlined buttons with blue color.

```html
<a href="#" class="button button-blue-outline">A blue button with OUTLINE</a>
```
<a href="#" class="button button-blue-outline">A blue button with OUTLINE</a>

#### `.button-green-outline`
- Applies green outline with transparent background to the button.
- Suitable for creating outlined buttons with green color.

```html
<a href="#" class="button button-green-outline">A green button with OUTLINE</a>
```
<a href="#" class="button button-green-outline">A green button with OUTLINE</a>

#### `.button-yellow-outline`
- Applies yellow outline with transparent background to the button.
- Suitable for creating outlined buttons with yellow color.

```html
<a href="#" class="button button-yellow-outline">A yellow button with OUTLINE</a>
```
<a href="#" class="button button-yellow-outline">A yellow button with OUTLINE</a>

#### `.button-black-outline`
- Applies black outline with transparent background to the button.
- Suitable for creating outlined buttons with black color.
```html
<a href="#" class="button button-black-outline">A black button with OUTLINE</a>
```
<a href="#" class="button button-black-outline">A black button with OUTLINE</a>

## Compatibility
This micro-framework is designed to be compatible with modern web browsers and responsive design principles.

## License
This micro-framework is provided under the MIT License. Feel free to use and modify it according to your project needs.
