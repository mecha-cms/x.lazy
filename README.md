Lazy Extension for [Mecha](https://github.com/mecha-cms/mecha)
==============================================================

![Code Size](https://img.shields.io/github/languages/code-size/mecha-cms/x.lazy?color=%23444&style=for-the-badge)

Starting with [Chrome 76](https://chromium.googlesource.com/chromium/src/+log/75.0.3770.67..76.0.3809.88), you’ll be able to use the new `loading` attribute to lazy-load resources without the need to write custom lazy-loading code or use a separate JavaScript library. Please note that only images that are below the device viewport by the calculated distance load lazily. All images above the viewport, regardless of whether they’re immediately visible, load normally.

This extension helps you to add the `loading` attribute automatically with value of `lazy`.

Release Notes
-------------

### 1.1.0

 - [x] Updated for Mecha 3.0.0.

### 1.0.2

 - [./mecha-cms/mecha#96](https://github.com/mecha-cms/mecha/issues/96)

### 1.0.1

 - Exclude Base64 image source.

### 1.0.0

 - Initial stable release for Mecha 2.2.0.