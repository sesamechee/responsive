Encoding.default_external = 'utf-8'

require 'compass/import-once/activate'
require 'ceaser-easing'
# Require any additional compass plugins here.

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "css"
sass_dir = "css/sass"
images_dir = "images"
generated_images_path = "images"
javascripts_dir = "javascripts"
cache = false

# You can select your preferred output style here (can be overridden via the command line):
output_style = :expanded #:expanded or :nested or :compact or :compressed

# To enable relative paths to assets via compass helper functions. Uncomment:
relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
line_comments = true

# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass


module Compass::SassExtensions::Functions::Sprites
  def sprite_url(map)
    verify_map(map)
    map.generate
    generated_image_url(Sass::Script::String.new(map.name_and_hash))
  end
end

module Compass::SassExtensions::Sprites::SpriteMethods
  def name_and_hash
    "#{path}.png"
  end

	def outdated?
	  if File.exists?(filename)
	    return @images.any? {|image| image.mtime.to_i > self.mtime.to_i }
	  end
	  true
	end

	def generation_required?
	  !File.exists?(filename) || outdated? || options[:force]
	end

  def cleanup_old_sprites
    Dir[File.join(::Compass.configuration.generated_images_path, "#{path}.png")].each do |file|
      log :remove, file
      FileUtils.rm file
      ::Compass.configuration.run_sprite_removed(file)
    end
  end
end