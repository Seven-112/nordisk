(function enableToggleResult() {
  $(".show_result").click(function () {
    const showing = $(this).attr("showing") === "true";

    const buttonTexts = {
      "show": "Vis resultater",
      "hide": "Luk resultater"
    }

    // Toggle showing property
    if (showing) {
      $(this).attr("showing", "false");
      $(this).find("span").html(buttonTexts.show);
    } else {
      $(this).attr("showing", "true");
      $(this).find("span").html(buttonTexts.hide);
    }

    // Toggle results and strategies
    $(".results").slideToggle();
    $(".strategies").slideToggle();
  });
})();

(function configCounter() {
  setInterval(() => {
    // Convert time to CET timezone
    const cetTime = new Date().toLocaleString("en-US", { timeZone: "CET" });

    // Calculate the difference
    const currentTime = new Date(cetTime);
    const targetTime = new Date(currentTime.getFullYear(), currentTime.getMonth(), currentTime.getDate(), 16, 0, 0, 0);
    let timeDifference = targetTime - currentTime;
    if (timeDifference < 0) timeDifference += 24 * 60 * 60 * 1000;

    // Format the date
    let hours = Math.floor(timeDifference / (1000 * 60 * 60));
    let minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

    if (hours < 10) hours = '0' + hours;
    if (minutes < 10) minutes = '0' + minutes;
    if (seconds < 10) seconds = '0' + seconds;

    const timeDifferenceString = `${hours}:${minutes}:${seconds}`;

    $(".counter").html(timeDifferenceString);
  }, 1000);
})();

(function configInputSettings() {
  // Set the max length of post number as 4
  $("input[name=postnum]")[0].oninput = function () {
    const postNum = $(this).val();
    $("input[name=address]")[0].disabled = postNum.length !== 4;
  };

  $("input[name=postnum]")[0].onkeypress = function () {
    if (this.value.length == 4) return false;
  }
})();
