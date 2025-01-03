class DetailPair{
    keyEl;
    valEl;
    delEl;
    cont;
    constructor(){
        this.initFields()
        this.registerEvents()
    }

    initFields(){
        this.cont = $(`<div class="detail-pair"></div>`).appendTo($(".details"));
        this.keyEl = $(`<input name="dkeys[]">`).appendTo($(this.cont));
        this.valEl = $(`<input name="dvalues[]">`).appendTo($(this.cont));
        this.delEl = $(`<button type="button" onclick>-</button>`).appendTo($(this.cont));
    }
    registerEvents(){
        $(this.keyEl).on('input', ()=>{
            $(this.valEl).attr("name", `dvalues[${$(this.keyEl).val()}]`)
        })
        $(this.delEl).click(()=>{
            $(this.cont).remove()
            
        })
    }
}

function addDetail(){
    let dp = new DetailPair();
}