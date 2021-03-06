# Contributing to the OpenGeoNet FreeGeo API

Projects like the FreeGeo API survive by contributions from brilliant coders around the world. Keeping this in mind, we wanted to make the process as easy as possible.

All contributions must be submitted via a [Pull Request](https://help.github.com/articles/creating-a-pull-request/) on [GitHub](https://github.com/OpenGeoNet/FreeGeoAPI).

## Pull Requests
- **Sign the CLA** - In order for us to accept your pull requests (and you code contributions), we require you to first sign the [OpenGeoNet Contributor License Agreement](https://www.clahub.com/agreements/OpenGeoNet/FreeGeoAPI). This is only required once for any OpenGeoNet project.

- **[PSR-4 Coding Standard](http://www.php-fig.org/psr/psr-4/)** - In order to comply with this standard, you should run [PHP Code Sniffer](https://github.com/squizlabs/PHP_CodeSniffer) as you write.

- **Add tests** - If you've added code that can be tested, add tests.

- **Document any change in behavior** - Make sure the README and the [documentation](https://github.com/OpenGeoNet/FreeGeoApi-Docs) are kept up-to-date.

- **Consider our release cycle** - We try to follow [SemVer](http://semver.org/). Randomly breaking public facing APIs and services is not an option for us.

- **Create topic branches** - Don't ask us to pull from your master branch. Ever.

- **One pull request per feature** - If you want to do more than one thing, send multiple pull requests.

- **Send coherent history** - Make sure each individual commit in your pull request is meaningful. If you had to make multiple intermediate commits while developing, please squash them before submitting.

- **Ensure tests pass!** - Please run the tests before submitting your pull request, and make sure they pass. We won't accept a patch until **all tests pass**.

- **Ensure no coding standards violations** - Please run [PHP Code Sniffer](https://github.com/squizlabs/PHP_CodeSniffer) using the PSR-4 standard before submitting your pull request. A violation will cause the build to fail, so please make sure there are no violations. We can't accept a patch if the build fails.


## Issues
We use GitHub issues to track public bugs. Please ensure your description is clear and has sufficient instructions to be able to reproduce the issue.


## Running Tests

All tests must pass in order for your contribution to be accepted. This is to protect the codebase, and ensure a quality product.

``` bash
$ phpunit -c app
```

**Happy coding**!
