function copyText() {
    // Get the text you want to copy
    const textToCopy = document.getElementById("textToCopy").innerText;

    // Create a temporary textarea element to hold the text
    const tempTextarea = document.createElement("textarea");
    tempTextarea.value = textToCopy;

    // Append the textarea to the DOM (off-screen)
    document.body.appendChild(tempTextarea);

    // Select and copy the text
    tempTextarea.select();
    document.execCommand("copy");

    // Remove the temporary textarea from the DOM
    document.body.removeChild(tempTextarea);

    // Optional: Provide some visual feedback to the user (e.g., changing button text)
    const copyButton = document.getElementById("copyButton");
    copyButton.innerText = "Copied!";
    setTimeout(() => {
        copyButton.innerText = "Copy";
    }, 2000); // Change back to "Copy" after 2 seconds (optional)
}
