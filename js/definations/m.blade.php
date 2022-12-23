@extends('inc.layout')

@section('content')

<div class="row">
    <div class="col">
    <h1 class="mb-4 mt-1 text-primary heding-one">M</h1>
    <hr id="top-heading">
    </div>
</div>

<div class="row">

    <div class="col-3">
            <ul class="list-group position-fixed" id="sidebar_menu">         
            </ul>
        </div>

        <div class="col-md-9">
            <h2>Memory</h2>
            <h4>Tutorial Points</h4>
                <p>A memory is just like a human brain. It is used to store data and instructions. Computer memory is the storage space in the computer, where data is to be processed and instructions required for processing are stored. The memory is divided into large number of small parts called cells. Each location or cell has a unique address, which varies from zero to memory size minus one. For example, if the computer has 64k words, then this memory unit has 64 * 1024 = 65536 memory locations. The address of these locations varies from 0 to 65535.</p>
                <h4>wikipedia</h4>
                <p>In computing, memory refers to a device that is used to store information for immediate use in a computer or related computer hardware device.[1] It typically refers to semiconductor memory, specifically metal–oxide–semiconductor (MOS) memory,[2][3] where data is stored within MOS memory cells on a silicon integrated circuit chip.</p>
                <p>Most semiconductor memory is organized into memory cells or bistable flip-flops, each storing one bit (0 or 1).</p>

                <p>Memory is primarily of three types −</p>
                <ul>
                    <li>Cache Memory</li>
                    <li>Primary Memory/Main Memory</li>
                    <li>Secondary Memory</li>
                </ul>
        
        </div>
</div>
@endsection