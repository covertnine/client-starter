# Client Directory Boilerplate

## The Developer's Condition

So you have a base theme and you have people who want websites. You want to use the same base theme across client projects, for obvious reasons. They want you to make all these fancy custom changes to the theme, but then they also want to mess with CSS or who knows maybe some PHP; all edits of variable quality. Oh, and you just noticed a visual bug in the base theme, which now must be fixed across every site you have. Or did the client create the visual bug? Who knows?

At CovertNine, we wanted a system that would address the common complications associated with managing multiple clients on a similar codebase. More specifically, we wanted to

1. Update the theme without overwriting any client stuff, by design
2. Version all client-specific code
3. Allow the client to mess with their code as much as they like, up to and including creating a child theme.

## The Solution

Our solution was to maintain one git repo for the parent theme ([c9](https://https://github.com/covertnine/c9-starter)), alongside a `gitignore`'d repo _inside_ the c9 directory. That's this repo. So, in WordPress, the directory stucture is `wp-content/themes/c9-starter/client`. Both 'c9-starter' and 'client' are git repos. We have added functions to the `c9-starter` theme that then check in the `client` directory for stuff before anywhere else. It's kind of like a child theme in that way, but a child theme only you mess with.

That leaves the actual child theme for your client theme (that's [c9-starter-child](https://github.com/covertnine/c9-starter-child)).

#### Why not submodules?

In short, they seemed like too much trouble for our problem. Just keeping a `client` line in the `.gitignore` for the parent theme seems pretty straightforward. And we can further automate the process with some sort of scripting if we so desire.

#### Why not per-project Git branches

Because this is a bad idea.

## Installation

```
// from themes directory

git clone https://github.com/covertnine/c9-starter.git
cd c9-starter
git clone https://github.com/covertnine/client-starter.git client
```

Now you can get regular updates on the base theme, and update your client code as much as you like.

## Integration with C9-starter theme development

While the client directory has a few useful functions and adds client-specific stuff like assets and custom fields, a lot of the magic happens in the parent c9-starter theme.

The C9 build process integrates with the client boilerplate via the gulpfile.js, which watches the scss files in the `client/client-assets` directory, and drops everything in the `client/dist` folder. This way, you can even overwrite scss variables defined in the parent theme (via `client/client-assets/_client_variables.scss`).

From `c9-starter`, just run `npm run start` and get going! 

## Don't want to mess with any of this?

If these are not problems you face, and you just want to get rolling, feel free to ignore all this, and just use a regular child theme, which you can get the boilerplate for [here](https://github.com/covertnine/c9-starter-child).
