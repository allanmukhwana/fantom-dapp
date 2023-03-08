pragma solidity 0.5.17;

contract FantomWill {



    event DeadlineChanged(uint oldValue, uint newValue);

    // Private variable of type int to keep the deadline

    uint private later;

    // Function that sets the deadline to the next 30 days
    function setdeadline() public {
      uint old_deadline = later;
      uint date = now;
      later = date + 30 days;
      emit DeadlineChanged(old_deadline, later);


    }

    // Getter to get the deadline value
    function getdeadline() public view returns (uint) {
        return later;
    }

}