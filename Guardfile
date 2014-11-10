# A sample Guardfile
# More info at https://github.com/guard/guard#readme
notification :none


guard :shell do
  # Watch tests files
  watch(%r{^.+_?[sS]pec\.php$}) do |m|
    #execute phpspec, path may change
    system("./bin/phpspec run --no-code-generation #{m[0]}")

    #Output command used to run phpspec for debugging
    "./bin/phpspec run --no-code-generation #{m[0]}"
  end

  # Watch library files and run their tests
  watch(%r{^src/(.+)\.php}) do |m|
    #execute phpspec, path may change
    system("./bin/phpspec run --no-code-generation ./spec/#{m[1]}Spec.php")

    #Output command used to run phpspec for debugging
    "./bin/phpspec run --no-code-generation ./spec/#{m[1]}Spec.php"
  end
end

