#!/bin/bash

# Get the current working directory
source_dir="$(pwd)"

# Output file
output_file="$source_dir/combo.txt"

# Ensure the output file is empty
> "$output_file"

# Loop through text files in the current directory
for file in "$source_dir"/*.txt; do
    # Check if the file exists
    if [ -e "$file" ]; then
        # Use 'head' to extract the first 16 lines and append to combo.txt
        head -n 16 "$file" >> "$output_file"
    fi
done

echo "First 16 lines from all text files have been combined into combo.txt"
